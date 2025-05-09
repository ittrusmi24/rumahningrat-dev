<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use GuzzleHttp\Client;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SendWhatsappNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookingCreated $event): void
    {

        $booking = $event->booking;
        $id_gci = $booking['id_gci'];
        $wa_content = $this->get_content_wa($id_gci);
        $wa_no_spv = trim($wa_content['no_spv']); // Nama konsumen
        $wa_no_mm = trim($wa_content['no_mm']); // Nama konsumen
        $wa_no_gm = trim($wa_content['no_gm']); // Nama konsumen
        $wa_no_konsumen = trim($wa_content['no_hp']); // Nama konsumen
        $wa_nama_konsumen = trim($wa_content['nama_konsumen']); // Nama konsumen
        $wa_project = trim($wa_content['project']); // Nama proyek perumahan
        $wa_blok = $wa_content['blok']; // Blok rumah
        $wa_id_gci = $wa_content['id_gci']; // ID untuk SPR Digital
        $md_gci = md5($wa_content['id_gci']); // Enkrip id_gci untuk SPR Digital
        $link_flip = 'https://payment.rumahningrat.com/' . $id_gci; // Link pembayaran

        $id_project = $wa_content['id_project'];

        if ($id_project == 64 || $id_project == 77 || $id_project == 53 || $id_project == 90 || $id_project == 49 || $id_project == 30) {
            $project_promo = "Bapak/Ibu dapat melakukan upload bukti proses *Booking* pada aplikasi Rumah Ningrat di alamat berikut: https://punyarumah.rumahningrat.com/claim \n\n";
        } else {
            $project_promo = "";
        }

        // Kirim notifikasi ke konsumen
        // Template pesan WhatsApp ke Customer
        $msg_customer = "Kepada Yth. Customer Rumah Ningrat tercinta\n\n";
        $msg_customer .= "Kami ucapkan terima kasih yang sebesar-besarnya kepada bapak/ibu *{$wa_nama_konsumen}* atas kepercayaan anda memilih perumahan *{$wa_project}* Blok *{$wa_blok}*. Kami sangat senang dan terhormat bisa menjadi bagian dari proses memiliki rumah impian anda.\n\n";
        $msg_customer .= "Dengan ini kami mengirimkan surat kesepakatan bersama (SPR) pembelian rumah agar bisa ditandatangani secara digital dengan melakukan Swafoto dan Tanda tangan digital pada link berikut:\n\n";
        $msg_customer .= "https://trusmicorp.com/rspproject/spr_digital_new?id={$md_gci}\n\n";
        $msg_customer .= "Berikutnya Anda dapat melakukan pembayaran untuk booking rumah Anda melalui link berikut:\n\n";
        // $msg_customer .= "{$link_flip}\n\n";
        $msg_customer .= "https://pay.rumahningrat.com/paygate/{$md_gci}\n\n";
        $msg_customer .= "Link tersebut akan mengarahkan Anda ke halaman pembayaran yang aman dan terjamin. Kami ingin memastikan bahwa proses pembayaran Anda berjalan dengan lancar dan nyaman.\n\n";
        // $msg_customer .= "Untuk pembayaran selanjutnya anda dapat membuat link pembayaran / virtual akun yang aman dan terjamin melalui link berikut :\nhttps://trusmicorp.com/rspproject/paygate/q/{$md_gci}\n\n";
        $msg_customer .= "Kami informasikan juga untuk pengecekan status proses pengajuan KPR bapak/ibu dapat di akses melalui link berikut dengan login menggunakan nomor hp yang terdaftar.\n\n";
        $msg_customer .= "https://punyarumah.rumahningrat.com/login \n\n";
        $msg_customer .= "Nomor hp yang terdaftar : {$wa_no_konsumen}\n";
        $msg_customer .= "Password : ningrat123\n";
        $msg_customer .= "{$project_promo}_Jika link tidak bisa di klik, balas \"OK\" pada pesan ini_\n\n";
        $msg_customer .= "Hormat kami,\n\n";
        $msg_customer .= "*Rumah Ningrat*\n";
        $msg_customer .= "#SemuaBisaPunyaRumah";
        $send_customer = $this->sendWhatsApp($wa_no_konsumen, $msg_customer);
        $send_customer = $this->sendWhatsApp('6285324409384', $msg_customer);

        // Kirim notifikasi ke marketing
        // Template pesan WhatsApp ke Head Marketing
        $msg_head_marketing = "🔥🔥 *Notifikasi Booking* 🔥🔥\n\n"
            . "📝 Id GCI : " . $id_gci . "\n"
            . "👫 Nama Cust. : " . $wa_nama_konsumen . "\n"
            . "🏠 Project : " . $wa_project . "\n"
            . "🏠 Blok : " . $wa_blok . "\n"
            . "⛩️ Opsi Pagar: " . $wa_content['opsi_pagar'] . "\n\n"
            . "😎 Sales : " . $wa_content['mkt'] . "\n"
            . "😎 Asstn. BM : " . $wa_content['spv'] . "\n"
            . "😎 BM : " . $wa_content['mm'] . "\n"
            . "😎 GM : " . $wa_content['rm'] . "\n"
            . "🕐 Tgl Booking : " . $wa_content['tgl_booking'] . "\n"
            . "💸 Bayar : " . $wa_content['tipe_pembayaran'] . "\n"
            . "🧾 Type Bayar : " . $wa_content['jenis_pembayaran'] . "\n"
            . "⏳ Progres Vendor : " . $wa_content['progres'] . "%\n"
            . "🏗️ Progres Pelaksana : " . $wa_content['progres_pelaksana'] . "%\n"
            . "⏱️ Umur Bangunan : " . $wa_content['umur_bangunan'];

        $send_head_mkt = $this->sendWhatsApp($wa_no_spv, $msg_head_marketing);
        $send_head_mkt = $this->sendWhatsApp($wa_no_mm, $msg_head_marketing);
        $send_head_mkt = $this->sendWhatsApp($wa_no_gm, $msg_head_marketing);
        $send_head_mkt = $this->sendWhatsApp('6285324409384', $msg_head_marketing);

        Log::info('BookingCreated was triggered', ['data' => $event->booking]);
        Log::info('BookingCreated send_head_mkt', ['send_head_mkt' => $send_head_mkt]);
        Log::info('BookingCreated send_customer', ['send_customer' => $send_customer]);
    }

    private function get_content_wa($id_gci)
    {
        $content = DB::connection('rsp_connection')
            ->select("SELECT 
                        t_gci.id_gci AS id_gci,
                        t_gci.manager AS id_manager,
                        m_konsumen.nama_konsumen,
                        m_konsumen.no_hp,
                        m_project.id_project,
                        m_project.project,
                        t_gci.blok,
                        mkt.employee_name AS mkt,
                        mkt.contact AS no_mkt,
                        COALESCE(leader.employee_name, '-') AS leader,
                        COALESCE(spv.employee_name, '-') AS spv,
                        COALESCE(mm.employee_name, '-') AS mm,
                        COALESCE(rm.employee_name, '-') AS rm,
                        COALESCE(spv.contact, '') AS no_spv,
                        COALESCE(mm.contact, '') AS no_mm,
                        COALESCE(rm.contact, '') AS no_gm,
                        DATE(t_gci.created_at) AS tgl_booking,
                        COALESCE(DATE(t_bic.created_at), '') AS tgl_berkas,
                        m_konsumen.tipe_pembayaran,
                        COALESCE(t_gci.jenis_pembayaran, '') AS jenis_pembayaran,
                        COALESCE(u.progres, 0) AS progres,
                        CASE 
                            WHEN u.progres_pelaksana IS NULL OR u.progres_pelaksana = '' THEN 0 
                            ELSE u.progres_pelaksana 
                        END AS progres_pelaksana,
                        COALESCE(t_gci.type_brosur, 1) AS type_brosur,
                        COALESCE(m_project.page, 1) AS page,
                        CASE 
                            WHEN COALESCE(u.progres, 0) = 100 
                            THEN CONCAT(DATEDIFF(CURRENT_DATE, u.tgl_vendor), ' Hari') 
                            ELSE '-' 
                        END AS umur_bangunan,
                        COALESCE(m_konsumen.jenis_berkas, '') AS jenis_berkas,
                        COALESCE(t_gci.opsi_pagar, '') AS opsi_pagar
                    FROM 
                        t_gci
                    LEFT JOIN 
                        m_project ON m_project.id_project = t_gci.id_project
                    LEFT JOIN 
                        m_konsumen ON m_konsumen.id_konsumen = t_gci.id_konsumen
                    LEFT JOIN 
                        user AS mkt ON mkt.id_user = t_gci.created_by
                    LEFT JOIN 
                        user AS spv ON spv.id_user = t_gci.spv
                    LEFT JOIN 
                        user AS mm ON mm.id_user = t_gci.manager
                    LEFT JOIN 
                        user AS rm ON rm.id_user = t_gci.id_gm
                    LEFT JOIN 
                        user AS leader ON leader.id_user = t_gci.leader
                    LEFT JOIN 
                        t_bic ON t_bic.id_gci = t_gci.id_gci
                    LEFT JOIN 
                        m_project_unit AS u ON u.id_project = t_gci.id_project AND u.blok = t_gci.blok
                    WHERE 
                        t_gci.id_gci = '$id_gci'
                    LIMIT 1");
        // Konversi hasil menjadi array asosiatif
        $contentArray = json_decode(json_encode($content), true);

        // Return data sebagai array
        return $contentArray[0];
    }

    private function sendWhatsApp($to, $message)
    {
        $channel_id = env('WHATSAPP_CHANNEL_ID'); // Channel ID Whatsapp
        $api_key = env('WHATSAPP_API_KEY'); // API Key Whatsapp
        // Guzzle Client
        $client = new Client();
        $post_message = $client->post('https://onetalk-api.taptalk.io/api/integration/v1/inbox/send_message_whatsapp', [
            'headers' => [
                'API-Key' => $api_key,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'channelID' => $channel_id,
                'phone' => $to,
                'messageType' => 'text',
                'body' => $message,
                'withCase' => true,
            ],
        ]);
        return $response_body = json_decode($post_message->getBody()->getContents(), true);
    }
}
