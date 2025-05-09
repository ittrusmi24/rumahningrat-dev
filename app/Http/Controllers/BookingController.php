<?php

namespace App\Http\Controllers;

use App\Events\BookingCreated;
use App\Models\BiChecking;
use App\Models\BicVoucher;
use App\Models\Booking;
use App\Models\BookingHistoryRsp;
use App\Models\BookingStatus;
use App\Models\Konsumen;
use App\Models\KonsumenClik;
use App\Models\KonsumenEces;
use App\Models\KonsumenPasangan;
use App\Models\Project;
use App\Models\ProjectUnit;
use App\Models\UserRumahNingrat;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{

    public function simpan_booking(Request $request)
    {
        // TODO Validasi Input Request
        $proses_validasi = $this->validasi_manual($request);
        if ($proses_validasi['status'] == false) {
            echo json_encode($proses_validasi);
            exit;
        }

        // TODO Prepare Data Input
        $id_sales = strip_tags(trim($request->id_sales));
        if ($id_sales == '' || $id_sales == null || empty($id_sales)) {
            $created_by = 23381;
            $id_spv = 170;
            $id_manager = 2029;
            $id_gm = 0;
            $id_divisi = 2;
        } else {
            $created_by = $id_sales;
            $id_project = strip_tags(trim($request->id_project));

            // $user_rsp = DB::connection('rsp_connection')->table('user')
            //     ->select('id_user', 'spv', 'id_manager', 'id_gm', 'id_divisi')
            //     ->where('id_user', '=', $id_sales)->first();

            $user_rsp = DB::connection('rsp_connection')
                ->table('user')
                ->select(
                    'user.id_user',
                    'user.spv',
                    DB::raw("IF(hris.xin_employees.designation_id = 1690, COALESCE(p.id_bm, 2029), user.id_manager) AS id_manager"),
                    'user.id_gm',
                    'user.id_divisi'
                )
                ->leftJoin('hris.xin_employees', 'user.join_hr', '=', 'hris.xin_employees.user_id')
                ->leftJoin('m_project as p', function ($join) use ($id_project) {
                    $join->on('p.id_project', '=', DB::raw("'{$id_project}'"));
                })
                ->where('user.id_user', $id_sales)
                ->first();
                
            $id_spv = $user_rsp->spv;
            $id_manager = $user_rsp->id_manager;
            $id_gm = $user_rsp->id_gm;
            $id_divisi = $user_rsp->id_divisi;
        }
        $kode_referral = strip_tags(trim($request->kode_referral));
        if ($kode_referral == '' || $kode_referral == null || empty($kode_referral)) {
            $reveral = "";
        } else {
            $reveral = $kode_referral;
        }
        $id_project = strip_tags(trim($request->id_project));
        $blok = strip_tags(trim($request->blok));
        $nama_lengkap = ucwords(strtolower(str_replace(['"', "'"], '', strip_tags(trim($request->nama_lengkap)))));
        $nama_pasangan = ucwords(strtolower(str_replace(['"', "'"], '', strip_tags(trim($request->nama_pasangan)))));
        $no_ktp = strip_tags(trim($request->no_ktp));
        $tgl_lahir = strip_tags(trim($request->tgl_lahir));
        $nominal_booking = str_replace(".", "", strip_tags(trim($request->nominal_booking)));
        $pendapatan = str_replace(".", "", strip_tags(trim($request->pendapatan)));
        $no_hp = strip_tags(trim($request->no_hp));
        if (substr($no_hp, 0, 1) == '0') {
            $no_hp = '62' . substr($no_hp, 1);
        }
        $jenis_kelamin = strip_tags(trim($request->jenis_kelamin));
        $jenis_pembayaran = strip_tags(trim($request->jenis_pembayaran));
        $status = strip_tags(trim($request->status));
        $id_kelurahan = strip_tags(trim($request->id_kelurahan));
        $alamat = ucwords(strtolower(strip_tags(trim($request->alamat))));
        $tempat_lahir = ucwords(strtolower(strip_tags(trim($request->tempat_lahir))));
        $no_ktp_p = '';

        $pekerjaan = strip_tags(trim($request->pekerjaan));
        $tenor = strip_tags(trim($request->tenor));
        $biaya_hidup = str_replace(".", "", strip_tags(trim($request->biaya_hidup)));
        
        if ($status == '2') {
            $no_ktp_p = strip_tags(trim($request->no_ktp_p));
            $tgl_lahir_p = strip_tags(trim($request->tgl_lahir_p));
            $tempat_lahir_p = strip_tags(trim($request->tempat_lahir_p));
            $jenis_kelamin_p = strip_tags(trim($request->jenis_kelamin_p));
            $alamat_p = ucwords(strtolower(strip_tags(trim($request->alamat_p))));
            $pekerjaan_p = strip_tags(trim($request->pekerjaan_p));
            $pendapatan_p = str_replace(".", "", strip_tags(trim($request->pendapatan_p)));
        }

        // TODO Check Blok Tersedia
        // Skema Project Double Booking
        $list_project_double_booking = ['70', '40'];
        if (in_array($id_project, $list_project_double_booking) == 1) {
            $booking = Booking::isAkad($id_project, $blok);

            if (empty($booking)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Blok Tidak Tersedia'
                ]);
            }

            if (!isset($booking[0]->is_akad)) {
                return response()->json([
                    'status' => false,
                    'message' => "Blok Tidak Tersedia"
                ]);
            }

            if (isset($booking[0]->is_akad)) {
                if ($booking[0]->is_akad >= 1) {
                    return response()->json([
                        'status' => false,
                        'message' => "Blok " . $blok . " Sudah Dibooking oleh orang lain dan sudah proses SP3K, Silahkan Pilih Blok Lain"
                    ]);
                }
            }

            if (isset($booking[0]->jml_booking)) {
                if ($booking[0]->jml_booking >= 2) {
                    return response()->json([
                        'status' => false,
                        'message' => "Blok " . $blok . " Sudah Dibooking oleh lebih dari 2 Orang, Silahkan Pilih Blok Lain Atau Tunggu Proses Reject"
                    ]);
                }
            }
        } else {
            $countBlokAlreadyBooked = Booking::where('id_kategori', 3)->where('id_project', $id_project)->where('blok', $blok)->count();
            if ($countBlokAlreadyBooked > 0) {
                return response()->json([
                    "status" => false,
                    "message" => "Blok " . $blok . " Sudah Dibooking oleh orang lain, Silahkan Pilih Blok Lain"
                ]);
            }
        }

        // DB::connection('rsp_connection')->beginTransaction();
        // DB::connection('eces_connection')->beginTransaction();
        // DB::connection('rumahningrat_connection')->beginTransaction();

        $get_kelurahan = DB::connection('rsp_connection')->table('r_kelurahan_new')->where('id_kelurahan', $id_kelurahan)->first();
        $get_kecamatan = DB::connection('rsp_connection')->table('r_kecamatan_new')->where('id_kecamatan', $get_kelurahan->id_kecamatan)->first();
        $get_kota_clik = DB::connection('rsp_connection')->table('r_kota_dummy')->where('id_kota', $get_kecamatan->id_kota)->first();
        $get_kode_pos = DB::connection('rsp_connection')->table('r_kelurahan_new')->where('id_kelurahan', $id_kelurahan)->first();

        try {
            // 1. TODO Insert Konsumen
            $id_konsumen = Konsumen::generate_id_konsumen();
            $now = new DateTime();
            $birthdate = new DateTime($tgl_lahir);
            $usia = $now->diff($birthdate)->y;
            $data_post_konsumen = [
                'id_konsumen' => $id_konsumen,
                'nama_konsumen' => $nama_lengkap,
                'ktp' => $no_ktp,
                'usia' => $usia,
                'id_status' => $status,
                'id_pekerjaan' => $pekerjaan,
                'tenor' => $tenor,
                'id_sub_pekerjaan' => '',
                'level_pekerjaan' => '',
                'ket_pekerjaan' => '',
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'pendapatan' => $pendapatan,
                'biaya_hidup' => $biaya_hidup,
                'no_hp' => $no_hp,
                'no_hp_darurat' => '',
                'email' => '',
                'alamat' => $alamat,
                'rtrw' => '',
                'id_provinsi' => $get_kota_clik->id_provinsi,
                'id_kota' => $get_kecamatan->id_kota,
                'id_kecamatan' => $get_kelurahan->id_kecamatan,
                'id_kelurahan' => $get_kelurahan->id_kelurahan,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $created_by,
                'domisili' => '',
                'bpjs' => '',
                'perusahaan' => '',
                'tipe_pembayaran' => 'Payment Gateway',
            ];
            Konsumen::create($data_post_konsumen);
            $data_post_array[] = $data_post_konsumen;

            // 2. TODO Insert Konsumen Pasangan Jika Status Menikah
            if ($status == 2) {
                $data_post_konsumen_pasangan = array(
                    'id_konsumen' => $id_konsumen,
                    'nama_pasangan' => $nama_pasangan,
                    'ktp_p' => $no_ktp_p,
                    'tempat_lahir' => $tempat_lahir,
                    'tgl_lahir' => $tgl_lahir,
                    'tempat_lahir_p' => $tempat_lahir_p,
                    'tgl_lahir_p' => $tgl_lahir_p,
                    'alamat_p' => $alamat_p,
                    'pekerjaan_p' => $pekerjaan_p,
                    'pendapatan_p' => $pendapatan_p,
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => $created_by
                );
                $data_post_array[] = $data_post_konsumen_pasangan;
                KonsumenPasangan::create($data_post_konsumen_pasangan);
            }

            // 3. TODO Insert Booking / GCI
            $id_gci = Booking::generate_id_gci();
            $id_project_tipe = Booking::get_id_project_tipe($id_project, $blok);
            $data_post_booking = array(
                'id_gci' => $id_gci,
                'id_project' => $id_project,
                'blok' => $blok,
                'id_event' => 708,
                'id_kategori' => 3,
                'id_konsumen' => $id_konsumen,
                'nominal' => $nominal_booking,
                'id_project_tipe' => $id_project_tipe,
                'id_gci_status' => 1,
                'jenis_pembayaran' => $jenis_pembayaran,
                'kelurahan' => '',
                'id_user' => $created_by, // Booking mandiri
                'spv' => $id_spv, // non spv
                'manager' => $id_manager, // non bm
                'id_gm' => $id_gm,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $created_by, // Booking mandiri
                'reveral' => $reveral,
                'kode_referral' => $reveral,
                'opsi_pagar' => 'Pakai Pagar', // value Pakai Pagar atau Tanpa Pagar
                'id_divisi' => $id_divisi,
                'booking_from' => 'Rumah Ningrat',
            );
            Booking::create($data_post_booking);

            $data_post_array['gci'] = $data_post_booking;

            // Kebutuhan Voucher Promo Booster
            if ($request->id_voucher != "") {
                $id_voucher = strip_tags(trim($request->id_voucher));
                $diskon_spr = strip_tags(trim($request->diskon_spr));
                $up_spek = strip_tags(trim($request->up_spek));
                if ($id_voucher == 6) {
                    // GRATIS DAPUR
                    BicVoucher::create([
                        'id_gci' => $id_gci,
                        'id_voucher' => $id_voucher,
                        'gratis_dapur' => 1,
                        'nominal_gratis_dapur' => $up_spek,
                    ]);
                } else if ($id_voucher == 7) {
                    // DISKON SPR 50%
                    BicVoucher::create([
                        'id_gci' => $id_gci,
                        'id_voucher' => $id_voucher,
                        'dev_terbaik' => 1,
                        'nominal_dev_terbaik' => $diskon_spr,
                    ]);
                }
            }

            // 4. TODO Insert Booking Status
            $data_post_booking_status = array(
                'id_gci' => $id_gci,
                'id_gci_status' => 1,
                'gci_status' => 'Input Customer',
                'created_at' => date('Y-m-d H:i:s'),
            );

            $data_post_array[] = $data_post_booking_status;
            BookingStatus::create($data_post_booking_status);


            // 5. TODO Insert Booking History RSP Project
            $data_post_booking_history = array(
                'id_gci' => $id_gci,
                'id_kategori' => $request->id_project,
                'blok' => $request->blok,
                'nominal' => str_replace('.', '', $request->nominal),
                'created_at' => date('Y-m-d H:i:s'),
                'ket_proses' => 'Input Customer',
            );

            $data_post_array[] = $data_post_booking_history;
            BookingHistoryRsp::create($data_post_booking_history);



            // 6. TODO Update Status Master Blok
            $data_post_status_blok = array(
                'id_status' => 2,
            );
            $data_post_array[] = $data_post_status_blok;
            ProjectUnit::where('id_project', $id_project)->where('blok', $blok)->update($data_post_status_blok);


            // 7. TODO Insert BIC
            $id_bic = BiChecking::generate_id_bic();
            $data_bic = array(
                "id_bic"                    => $id_bic,
                "id_gci"                    => $id_gci,
                "created_at"                => date('Y-m-d H:i:s'),
                "created_by"                => $created_by,
            );
            BiChecking::create($data_bic);

            // 8. TODO Insert Konsumen Clik
            $get_status_clik = DB::connection('rsp_connection')->table('m_konsumen_status')->where('id_status', $request->status)->first();
            $data_post_konsumen_clik = array(
                'id_gci' => $id_gci,
                'id_konsumen' => $id_konsumen,
                'nameAsId' => $nama_lengkap,
                'fullName' => $nama_lengkap,
                'mothersName' => '',
                'birthDate' => $tgl_lahir,
                'birthPlace' => $tempat_lahir,
                'address' => $alamat,
                'subDistrict' => $get_kelurahan->kelurahan,
                'district' => $get_kecamatan->kecamatan,
                'city' => $get_kota_clik->id_kota_clik,
                'postalCode' => $get_kode_pos->kode_pos,
                'country' => 'ID',
                'identityType' => '1',
                'identityNumber' => $no_ktp,
                'cellphoneNumber' => $no_hp,
                'gender' => $jenis_kelamin,
                'marriageStatus' => $get_status_clik->id_status_clik,
                'getPDF' => 'yes',
                'purposeCode' => '20',
                'created_at' => date('Y-m-d H:i:s')
            );
            $data_post_array[] = $data_post_konsumen_clik;
            KonsumenClik::create($data_post_konsumen_clik);

            // 9. TODO Insert Konsumen Eces
            $project_eces = Project::get_project_by_id_eces($id_project);
            $cusId = KonsumenEces::get_cus_id();
            $cusKd = KonsumenEces::get_cus_kd($project_eces->prj_eces);
            $data_post_konsumen_eces = array(
                'cus_id' => $cusId,
                'cus_kd' => $cusKd,
                'cus_nm' => $nama_lengkap,
                'cus_alm' => $alamat,
                'cus_telp' => $no_hp,
                'cus_identitas' => $no_ktp,
                'cus_kontak' => $no_hp,
                'cus_profesi' => '',
                'cus_kota' => '',
                'cus_alm_surat' => '',
                'prj_id' => $project_eces->prj_eces,
                'cus_hp' => $no_hp,
                'cus_pwd' => 'be92fec1f8583ff513da3d5563b10c83',
                'cus_instansi_nm' => $id_gci,
            );
            $data_post_array[] = $data_post_konsumen_eces;
            KonsumenEces::create($data_post_konsumen_eces);

            // 10. TODO Create User Rumah Ningrat
            $data_post_user_rumah_ningrat = [
                'name' => $nama_lengkap,
                'phone' => $no_hp,
                'id_gci' => $id_gci,
                'id_konsumen' => $id_konsumen,
                'no_ktp' => $no_ktp,
                'jenis_kelamin' => $jenis_kelamin,
                'tgl_lahir' => $tgl_lahir,
                'usia' => $usia,
                'status_nikah' => $status,
                'alamat' => $alamat,
                'pendapatan' => $pendapatan,
                'password' => Hash::make('ningrat123'),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            if ($status == 2) {
                $data_post_user_rumah_ningrat['nama_p'] = $nama_pasangan;
                $data_post_user_rumah_ningrat['no_ktp_p'] = $no_ktp_p;
            }
            $data_post_array[] = $data_post_user_rumah_ningrat;
            UserRumahNingrat::create($data_post_user_rumah_ningrat);

            // Trigger event
            // 11. Send Notifikasi Whatsapp
            $data_for_event_booking = [
                'id_gci' => $id_gci
            ];

            // // Jika semua berhasil, commit perubahan
            // DB::connection('rsp_connection')->commit();
            // DB::connection('eces_connection')->commit();
            // DB::connection('rumahningrat_connection')->commit();

            // Trigger event
            event(new BookingCreated($data_for_event_booking));
        } catch (\Exception $e) {
            // // Jika terjadi error, batalkan perubahan
            // DB::connection('rsp_connection')->rollBack();
            // DB::connection('eces_connection')->rollBack();
            // DB::connection('rumahningrat_connection')->rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e
            ], 500);
        }

        $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

        // Tambahkan 3 jam
        $date->modify('+3 hours');

        // Format tanggal ke "6 Januari 14:30:00"
        $months = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];

        $formattedDate = $date->format('j F H:i:s');
        foreach ($months as $en => $id) {
            $formattedDate = str_replace($en, $id, $formattedDate);
        }
        $expired_time = $formattedDate;

        return response()->json([
            'status' => true,
            'message' => 'Booking berhasil',
            'data' => $data_post_array,
            'id_gci'  => md5($id_gci),
            'expired_time'  => $expired_time
        ], 200);
    }

    private function validasi_manual($request)
    {

        // TODO Parameter Request
        // id_project = [wajib] 
        // blok = [wajib] 
        // nama_lengkap = [wajib] 
        // no_ktp = [wajib] 
        // tgl_lahir = [wajib|harus 16 tahun keatas] 
        // pendapatan = [wajib]
        // no_hp = [wajib|harus diatas 6 digit] 
        // status = [wajib] 
        // jenis_kelamin = [wajib] 
        // alamat = [wajib]
        // nominal_booking = [wajib]

        // [wajib jika status menikah] no_ktp_p
        // [wajib jika status menikah] nama_pasangan

        $id_project = $request->id_project ?? "";
        if ($id_project == "") {
            return [
                "status" => false,
                "message" => "Perumahan Tidak Boleh Kosong"
            ];
        }
        $blok = $request->blok ?? "";
        if ($blok == "") {
            return [
                "status" => false,
                "message" => "Blok Tidak Boleh Kosong"
            ];
        }
        $nama_lengkap = $request->nama_lengkap ?? "";
        if ($nama_lengkap == "") {
            return [
                "status" => false,
                "message" => "Nama Lengkap Tidak Boleh Kosong"
            ];
        }

        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $nama_lengkap)) {
            return [
                "status" => false,
                "message" => "Nama Lengkap Hanya Boleh Menggunakan Huruf, Angka dan Spasi"
            ];
        }

        $no_hp = $request->no_hp ?? "";
        if ($no_hp == "") {
            return [
                "status" => false,
                "message" => "No HP Tidak Boleh Kosong"
            ];
        }
        if (!is_numeric($no_hp)) {
            return [
                "status" => false,
                "message" => "No HP Harus Angka"
            ];
        }
        if ($no_hp == "" && strlen($no_hp) < 6) {
            return [
                "status" => false,
                "message" => "No HP Tidak Boleh Kurang dari 6 digit"
            ];
        }
        $tgl_lahir = $request->tgl_lahir ?? "";
        if ($tgl_lahir == "") {
            return [
                "status" => false,
                "message" => "Tgl Lahir Tidak Boleh Kosong"
            ];
        }
        $now = new DateTime();
        $birthdate = new DateTime($tgl_lahir);
        $age = $now->diff($birthdate)->y;
        if ($age < 16) {
            return [
                "status" => false,
                "message" => "Usia Tidak Boleh Kurang dari 16 Tahun"
            ];
        }
        $jenis_kelamin = $request->jenis_kelamin ?? "";
        if ($jenis_kelamin == "") {
            return [
                "status" => false,
                "message" => "Jenis Kelamin Tidak Boleh kosong"
            ];
        }
        $no_ktp = $request->no_ktp ?? "";
        if ($no_ktp == "") {
            return [
                "status" => false,
                "message" => "No KTP Tidak Boleh Kosong"
            ];
        }
        if ($no_ktp != "" && strlen($no_ktp) < 16) {
            return [
                "status" => false,
                "message" => "No KTP Tidak Boleh Kurang dari 16 digit"
            ];
        }
        $id_kelurahan = $request->id_kelurahan ?? "";
        if ($id_kelurahan == "") {
            return [
                "status" => false,
                "message" => "Kelurahan Tidak Boleh kosong"
            ];
        }
        $alamat = $request->alamat ?? "";
        if ($alamat == "") {
            return [
                "status" => false,
                "message" => "Alamat Tidak Boleh kosong"
            ];
        }

        $pendapatan = $request->pendapatan ?? "";
        if ($pendapatan == "") {
            return [
                "status" => false,
                "message" => "Pendapatan Tidak Boleh Kosong"
            ];
        }
        $status = $request->status ?? "";
        if ($status == "") {
            return [
                "status" => false,
                "message" => "Status Perkawinan Tidak Boleh Kosong"
            ];
        }
        $no_ktp_p = $request->no_ktp_p ?? "";
        if ($status == "2" && $no_ktp_p == "") {
            return [
                "status" => false,
                "message" => "No KTP Pasangan Harus diisi jika status Menikah"
            ];
        }
        $nama_pasangan = $request->nama_pasangan ?? "";
        if ($status == "2" && $nama_pasangan == "") {
            return [
                "status" => false,
                "message" => "Nama Pasangan Harus diisi jika status Menikah"
            ];
        }
        $nominal_booking = $request->nominal_booking ?? "";
        if ($nominal_booking == "") {
            return [
                "status" => false,
                "message" => "Nominal Booking Tidak Boleh Kosong"
            ];
        }
        if (!is_numeric(str_replace(".", "", $nominal_booking))) {
            return [
                "status" => false,
                "message" => "Nominal Booking Harus Angka"
            ];
        }
        return [
            "status" => true,
        ];
    }
}
