<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::latest()->paginate(21);
        return view('guest.galeri', ['galeri' => $galeri])->with('i',(request()->input('page',1)-1)*21);
    }
}
