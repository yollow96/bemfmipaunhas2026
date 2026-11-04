<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use Exception;
use Illuminate\Support\Facades\Log;

class CarouselsController extends Controller
{
    public function index()
    {

        $carousels = Carousel::orderBy('waktu_pelaksanaan', 'desc')->get();
        return view('hero.manage', ['carousels' => $carousels]);
    }



    public function destroy($id)
    {

        try {
            Carousel::destroy($id);
            return redirect('carousels')->with('message', 'Carousel dihapus!');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Menghapus data : ' . $e->getMessage());
            return redirect('carousels')->with('error', ' Carousel Gagal dihapus!');
        }
    }

    public function create()
    {
        return view('hero.create');
    }
    public function edit($id)
    {
        $carousel = Carousel::find($id);

        if (!$carousel) {
            return redirect()->route('carousels.index')->with('error', 'Carousel not found.');
        }

        return view('hero.edit', compact('carousel'));
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'jenis_corcel' => 'required|in:event,biasa',
                'judul' => 'required|string',
                'waktu_pelaksanaan' => 'nullable|string',
                'deskripsi' => 'nullable|string',
                'link' => 'nullable|url',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Increased to 10MB
            ]);

            // Handle file upload
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images');
                
                // Create directory if it doesn't exist
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                
                // Move the uploaded file
                $image->move($destinationPath, $imageName);
                $validatedData['gambar_path'] = 'images/' . $imageName;
                unset($validatedData['gambar']); // Remove 'gambar' key since we use 'gambar_path'
            }

            $carousel = Carousel::create($validatedData);

            return redirect()->route('carousels.index')
                ->with('message', 'Carousel berhasil ditambahkan!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Validasi gagal: ' . implode(', ', array_map(function($errors) { return implode(', ', $errors); }, $e->errors())));
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal menambahkan carousel: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'jenis_corcel' => 'required|in:event,biasa',
                'judul' => 'required|string',
                'waktu_pelaksanaan' => 'nullable|string',
                'deskripsi' => 'nullable|string',
                'link' => 'nullable|url',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Increased to 10MB
            ]);

            $carousel = Carousel::findOrFail($id);

            // Handle file upload
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images');
                
                // Create directory if it doesn't exist
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
                
                // Move the uploaded file
                $image->move($destinationPath, $imageName);
                $validatedData['gambar_path'] = 'images/' . $imageName;
                unset($validatedData['gambar']); // Remove 'gambar' key since we use 'gambar_path'
            }

            $carousel->update($validatedData);

            return redirect()->route('carousels.index')
                ->with('message', 'Carousel berhasil diperbarui!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Validasi gagal: ' . implode(', ', array_map(function($errors) { return implode(', ', $errors); }, $e->errors())));
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui carousel: ' . $e->getMessage());
        }
    }
}
