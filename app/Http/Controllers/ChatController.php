<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatHistory;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function kategori()
    {
        try {
            //code...
            $kategori = Chat::get_all_kategori();
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $kategori
            ]);
        } catch (\Throwable $th) {
            throw $th;
            echo json_encode([
                'status' => false,
                'message' => 'Error, Check Log...' . $th,
            ]);
            return;
        }
    }
    public function sub_kategori(Request $request)
    {
        $id_kategori = strip_tags($request->id_kategori);
        if ($id_kategori == '') {
            echo json_encode([
                'status' => true,
                'message' => 'Sub Kategori Tidak Boleh Kosong',
            ]);
            return;
        }
        try {
            //code...
            $sub_kategori = Chat::get_all_sub_kategori($id_kategori);
            $userAgent = $request->userAgent();
            $chatHistory = ChatHistory::create([
                'id_kategori' => $id_kategori,
                'user_agent' => $userAgent,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $sub_kategori
            ]);
        } catch (\Throwable $th) {
            throw $th;
            echo json_encode([
                'status' => false,
                'message' => 'Error, Check Log...' . $th,
            ]);
            return;
        }
    }

    public function jawaban(Request $request)
    {
        $id_sub_kategori = strip_tags($request->id_sub_kategori);
        if ($id_sub_kategori == '') {
            echo json_encode([
                'status' => true,
                'message' => 'Sub Kategori Tidak Boleh Kosong',
            ]);
            return;
        }
        try {
            //code...
            $sub_kategori = Chat::get_jawaban($id_sub_kategori);
            $userAgent = $request->userAgent();
            $chatHistory = ChatHistory::create([
                'id_sub_kategori' => $id_sub_kategori,
                'user_agent' => $userAgent,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $sub_kategori
            ]);
        } catch (\Throwable $th) {
            throw $th;
            echo json_encode([
                'status' => false,
                'message' => 'Error, Check Log...' . $th,
            ]);
            return;
        }
    }
}
