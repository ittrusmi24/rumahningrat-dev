<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function simpan_booking(Request $request)
    {
        // Validasi input
        $proses_validasi = $this->validasi_manual($request);
        if ($proses_validasi['status'] == false) {
            echo json_encode($proses_validasi);
            exit;
        }


        $nama_lengkap = ucwords(strtolower(str_replace(['"', "'"], '', strip_tags(trim($request->nama_lengkap)))));
        $no_ktp = strip_tags(trim($request->no_ktp));
        $tgl_lahir = strip_tags(trim($request->tgl_lahir));
        $pendapatan = str_replace(".", "", strip_tags(trim($request->pendapatan)));
        $no_hp = strip_tags(trim($request->no_hp));
        if (substr($no_hp, 0, 1) == '0') {
            $no_hp = '62' . substr($no_hp, 1);
        }
        $alamat = strip_tags(trim($request->alamat));
        $status = strip_tags(trim($request->status));
        $no_ktp_p = '';
        if ($status == '2') {
            $no_ktp_p = strip_tags(trim($request->no_ktp_p));
        }

        // DB::beginTransaction();

        try {
            $id_konsumen = Konsumen::generate_id_konsumen();
            $data_post_konsumen = [
                'id_konsumen' => $id_konsumen,
                'nama_konsumen' => $nama_lengkap,
                'ktp' => $no_ktp,
                'usia' => '',
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
                'domisili' => '',
                'bpjs' => '',
                'perusahaan' => '',
                'tipe_pembayaran' => 'Payment Gateway',
            ];
            // TODO insert Konsumen
            echo json_encode($data_post_konsumen);
            exit;
            // // Simpan booking
            // $booking = Booking::create([
            //     'customer_id' => $request->customer_id,
            //     'property_id' => $request->property_id,
            // ]);

            // // Kurangi stok rumah
            // $property = Property::find($request->property_id);
            // if ($property->stock <= 0) {
            //     throw new \Exception('Stok rumah habis');
            // }
            // $property->stock -= 1;
            // $property->save();

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

        return [
            "status" => true,
        ];
    }
}
