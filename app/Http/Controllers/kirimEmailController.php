<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class kirimEmailController extends Controller
{
    public function index()
    {
        $data_email = Session::get('data_email');

        if ($data_email) {
            try {
                // Kirim email ke beberapa alamat email
                Mail::to(["websitehimatika@gmail.com", "fauzanalwan193@gmail.com"])
                    ->send(new kirimEmail($data_email));

                // Hapus data email dari session setelah dikirim
                Session::forget('data_email');

                return redirect()->back()->with('message', "Email Anda Berhasil Terkirim ,Terimakasih telah mengirim
                            Email!");
            } catch (Exception $e) {
                // Tangani kesalahan
                Log::error('Gagal mengirim email: ' . $e->getMessage());
                return redirect()->back()->with('error', "Gagal mengirim email. Silakan coba lagi, Atau Periksa Koneksi internet Anda!.");
            }
        } else {
            return redirect()->back()->with('error', "Data email tidak tersedia.");
        }
    }
}
