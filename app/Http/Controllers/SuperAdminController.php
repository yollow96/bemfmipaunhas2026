<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnggotaController;
use App\Models\Anggota;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:kesekretariatan');
    }
    public function index(){
        $anggota = Anggota::all();
        return view('anggota.index')->with('anggota', $anggota);
    }
}