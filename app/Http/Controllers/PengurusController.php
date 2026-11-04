<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('about.manage', ['pengurus' => $pengurus]);
    }
    public function destroy($id)
    {
        try {
            Pengurus::destroy($id);
            return redirect('/about/pengurus')->with('message', "Berhasil dihapus!");
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Menghapus data : ' . $e->getMessage());
            return redirect('/about/pengurus')->with('error', "Gagal Menghapus");
        }
    }
    public function create()
    {
        return view('about.create');
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'quotes' => 'nullable|string',
                'instagram' => 'nullable|url|max:255',
                'facebook' => 'nullable|url|max:255',
                'twitter' => 'nullable|url|max:255',
                'linkedin' => 'nullable|url|max:255',
                'struktur_organisasi' => 'required|in:inti,dewan,kerohanian,pengaderan,AkademikDanKemahasiswaan,MinatDanBakat,Eksternal,Kesekretariatan',
                'jabatan' => 'required|in:ketua,Sekretaris,Anggota,Bendahara',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Increased to 10MB
            ]);

            // Handle file upload
            if ($request->hasFile('foto')) {
                $imageName = time() . '.' . $request->foto->extension();
                $request->foto->move(public_path('images'), $imageName);
                $validatedData['foto'] = 'images/' . $imageName;
            }

            $pengurus = Pengurus::create($validatedData);

            return redirect('/about/pengurus')
                ->with('message', 'Anggota pengurus berhasil ditambahkan!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Validasi gagal: ' . implode(', ', array_map(function($errors) { return implode(', ', $errors); }, $e->errors())));
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal menambahkan: ' . $e->getMessage());
        }
    }
    public function edit($id)
    {
        $pengurus = Pengurus::find($id);

        if (!$pengurus) {
            return redirect('/about/pengurus')->with('error', 'Anggota not found!');
        }

        return view('about.edit', compact('pengurus'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'struktur_organisasi' => 'required|in:inti,dewan,kerohanian,pengaderan,AkademikDanKemahasiswaan,MinatDanBakat,Eksternal,Kesekretariatan',
            'jabatan' => 'required|in:ketua,Sekretaris,Anggota,Bendahara',
        ]);

        $pengurus = Pengurus::find($id);

        if (!$pengurus) {
            return redirect('/about/pengurus')->with('error', 'Anggota not found!');
        }

        $pengurus->nama = $request->nama;
        $pengurus->quotes = $request->quotes;
        $pengurus->instagram = $request->instagram;
        $pengurus->facebook = $request->facebook;
        $pengurus->twitter = $request->twitter;
        $pengurus->linkedin = $request->linkedin;
        $pengurus->struktur_organisasi = $request->struktur_organisasi;
        $pengurus->jabatan = $request->jabatan;


        // Update gambar jika diunggah
        if ($request->hasFile('foto')) {
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;

            $pengurus->foto = $imagePath;
        }

        try {
            // Kirim email
            $pengurus->save();
            return redirect('/about/pengurus')->with('message', "Anggota Update successfully!");
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Menambahkan data : ' . $e->getMessage());
            return  redirect('/about/pengurus')->with('error', "Gagal Mengupdate");
        }
    }
}
