<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $blog = Blog::latest()->paginate(9);
        return view('guest.blog', ['blog' => $blog])->with('i',(request()->input('page',1)-1)*9);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        $recent = Blog::where('id', '!=', $id)->latest()->take(5)->get();
        return view('guest.show', ['blog' => $blog, 'recent' => $recent]);
    }
}
