<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Validation\Rule;
use Exception;
use Illuminate\Support\Facades\Log;

class AnggotaController extends Controller
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

        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'angkatan' => 'required',
            'status_anggota' => 'required',
            'domisili' => 'required',
            'prodi' => 'required',
            'phone' => 'required',

        ]);


        try {
            Anggota::create($input);
            return redirect('anggota')->with('message', 'Data keanggotaan ditambahkan!!');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal menambahkan data : ' . $e->getMessage());
            return redirect('anggota')->with('error', 'Data keanggotaan gagal ditambahkan!!!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit')->with('anggota', $anggota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);

        $request->validate([
            'name' => 'required',
            'angkatan' => 'required',
            'status_anggota' => 'required',
            'domisili' => 'required',
            'prodi' => 'required|',
            'phone' => 'required',
        ]);
        $input = $request->all();

        try {
            $anggota->update($input);
            return redirect('anggota')->with('message', 'Data anggota diperbarui!!');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal mengedit data : ' . $e->getMessage());
            return redirect('anggota')->with('error', 'Data keanggotaan gagal diperbarui!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            Anggota::destroy($id);
            return redirect('anggota')->with('message', 'Data anggota dihapus!!!');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal menghapus data : ' . $e->getMessage());
            return redirect('anggota')->with('error', 'Data keanggotaan gagal dihapus!!!!');
        }
    }
}
