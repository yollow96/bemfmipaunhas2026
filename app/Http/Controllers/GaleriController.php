<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::latest()->paginate(21);
        return view('galeri.index', ['galeri' => $galeri])->with('i', (request()->input('page', 1) - 1) * 21);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
        ]);

        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;

            $galeri = new Galeri();
            $galeri->kegiatan = $request->kegiatan;
            $galeri->image = $imagePath;
            $galeri->save();

            return redirect(route('galeri.index'))->with('message', 'Galeri berhasil ditambahkan!');
        } catch (Exception $e) {
            Log::error('Gagal Menambahkan data : ' . $e->getMessage());
            return redirect(route('galeri.index'))->with('error', 'Gagal menambahkan!');
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
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
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
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'kegiatan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
        ]);

        try {
            $galeri->kegiatan = $request->kegiatan;

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $galeri->image = 'images/' . $imageName;
            }

            $galeri->save();
            return redirect(route('galeri.index'))->with('message', 'Galeri berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Gagal Mengupdate data : ' . $e->getMessage());
            return redirect(route('galeri.index'))->with('error', 'Gagal memperbarui!');
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
            Galeri::destroy($id);
            return redirect('galeri')->with('message', ' hapus successfully');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Mengedit data : ' . $e->getMessage());
            return redirect('galeri')->with('error',  ' Gagal di menghapus ');
        }
    }
}
