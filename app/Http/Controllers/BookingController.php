<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingHistoryRsp;
use App\Models\BookingStatus;
use App\Models\Konsumen;
use App\Models\ProjectUnit;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $status = strip_tags(trim($request->status));
        $no_ktp_p = '';
        if ($status == '2') {
            $no_ktp_p = strip_tags(trim($request->no_ktp_p));
        }

        // TODO Check Blok Tersedia
        $countBlokAlreadyBooked = Booking::where('id_kategori', 3)->where('id_project', $id_project)->where('blok', $blok)->count();
        if ($countBlokAlreadyBooked > 0) {
            return [
                "status" => false,
                "message" => "Blok " . $blok . " Sudah Dibooking oleh orang lain, Silahkan Pilih Blok Lain"
            ];
        }

        // DB::beginTransaction();

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
                'id_pekerjaan' => '',
                'id_sub_pekerjaan' => '',
                'level_pekerjaan' => '',
                'ket_pekerjaan' => '',
                'tgl_lahir' => $tgl_lahir,
                'pendapatan' => $pendapatan,
                'no_hp' => $no_hp,
                'no_hp_darurat' => '',
                'email' => '',
                'rtrw' => '',
                'id_provinsi' => '',
                'id_kota' => '',
                'id_kecamatan' => '',
                'id_kelurahan' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 23139,
                'domisili' => '',
                'bpjs' => '',
                'perusahaan' => '',
                'tipe_pembayaran' => 'Payment Gateway',
            ];

            $data_post_array[] = $data_post_konsumen;

            // 2. TODO Insert Konsumen Pasangan Jika Status Menikah
            if ($status == 2) {
                $data_post_konsumen_pasangan = array(
                    'id_konsumen' => $id_konsumen,
                    'nama_pasangan' => $nama_pasangan,
                    'ktp_p' => $no_ktp_p,
                    'tempat_lahir' => '',
                    'tgl_lahir' => '',
                    'tempat_lahir_p' => '',
                    'tgl_lahir_p' => '',
                    'alamat_p' => '',
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => 23139
                );
                $data_post_array[] = $data_post_konsumen_pasangan;
                // $insert_konsumen = M_konsumen_pasangan::create($data_konsumen_pasangan);
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
                'jenis_pembayaran' => 'Payment Gateway',
                'kelurahan' => '',
                'id_user' => 23139, // Booking mandiri
                'spv' => 170, // non spv
                'manager' => 2029, // non bm
                'id_gm' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 23139, // Booking mandiri
                'opsi_pagar' => '', // value Pakai Pagar atau Tanpa Pagar
            );

            $data_post_array[] = $data_post_booking;

            // 4. TODO Insert Booking Status
            $data_post_booking_status = array(
                'id_gci' => $id_gci,
                'id_gci_status' => 1,
                'gci_status' => 'Input Customer',
                'created_at' => date('Y-m-d H:i:s'),
            );

            $data_post_array[] = $data_post_booking_status;
            // $insert_gci_status = BookingStatus::create($data_post_booking_status);


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
            // $insert_gci_history = BookingHistoryRsp::create($data_post_booking_history);



            // 6. TODO Update Status Master Blok
            $data_post_status_blok = array(
                'id_status' => 2,
            );

            $data_post_array[] = $data_post_status_blok;
            // $update_status_blok = ProjectUnit::where('id_project', $id_project)->where('blok', $blok)->update($data_post_status_blok);


            echo json_encode($data_post_array);
            die();

            // // Kirim notifikasi
            // event(new BookingCreated($booking));

            // // Jika semua berhasil, commit perubahan
            // DB::commit();
        } catch (\Exception $e) {
            // // Jika terjadi error, batalkan perubahan
            // DB::rollBack();
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Booking berhasil', 'data' => ''], 201);
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
        $pendapatan = $request->pendapatan ?? "";
        if ($pendapatan == "") {
            return [
                "status" => false,
                "message" => "Pendapatan Tidak Boleh Kosong"
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
        $alamat = $request->alamat ?? "";
        if ($alamat == "") {
            return [
                "status" => false,
                "message" => "Alamat Tidak Boleh kosong"
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

        return [
            "status" => true,
        ];
    }
}
