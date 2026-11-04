<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
class AnggotaGuestController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->s;
        $anggota = Anggota::whereNotNull('name')
            ->when($s, function ($query, $s) {
                $query->where(function ($q) use ($s) {
                    $q->where('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('angkatan', 'LIKE', '%' . $s . '%')
                        ->orWhere('domisili', 'LIKE', '%' . $s . '%')
                        ->orWhere('prodi', 'LIKE', '%' . $s . '%')
                        ->orWhere('phone', 'LIKE', '%' . $s . '%');
                });
            })
            ->orderBy('angkatan', 'desc')
            ->orderBy('prodi', 'asc')
            ->paginate(50);

        return view('guest.anggota', compact('anggota'));
    }

    
}
