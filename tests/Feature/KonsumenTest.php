<?php

namespace Tests\Feature;

use App\Models\Konsumen;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class KonsumenTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_insert_and_delete_a_post()
    {
        // Insert data ke database
        $id_konsumen = Konsumen::generate_id_konsumen();
        $konsumen = Konsumen::create(
            [
                "id_konsumen" => $id_konsumen,
                "nama_konsumen" => "Arez Setiana",
                "ktp" => "12345678901234567",
                "usia" => "31",
                "id_status" => 1,
                "tgl_lahir" => "1993-08-28",
                "pendapatan" => 1000000,
                "no_hp" => "6285324409384",
                "created_at" => "2024-12-31 11:27:25",
                "created_by" => 23139,
                "tipe_pembayaran" => "Payment Gateway"
            ]
        );

        // Periksa apakah data berhasil dimasukkan
        $this->assertDatabaseHas(
            'm_konsumen',
            [
                "id_konsumen" => $konsumen->id_konsumen,
                "nama_konsumen" => "Arez Setiana",
                "ktp" => "12345678901234567",
                "usia" => "31",
                "id_status" => 1,
                "tgl_lahir" => "1993-08-28",
                "pendapatan" => 100,
                "no_hp" => "6285324409384",
                "created_at" => "2024-12-31 11:27:25",
                "created_by" => 23139,
                "tipe_pembayaran" => "Payment Gateway"
            ],
            'rsp_connection'
        );

        // Hapus data dari database
        Konsumen::where('id_konsumen', $konsumen->id_konsumen)->delete();

        // Periksa apakah data berhasil dihapus
        $this->assertDatabaseMissing(
            'm_konsumen',
            [
                "id_konsumen" => $konsumen->id_konsumen,
                "nama_konsumen" => "Arez Setiana",
                "ktp" => "12345678901234567",
                "usia" => "31",
                "id_status" => 1,
                "tgl_lahir" => "1993-08-28",
                "pendapatan" => 100,
                "no_hp" => "6285324409384",
                "created_at" => "2024-12-31 11:27:25",
                "created_by" => 23139,
                "tipe_pembayaran" => "Payment Gateway"
            ],
            'rsp_connection'
        );
    }
}
