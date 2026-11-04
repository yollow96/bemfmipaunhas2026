<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:MIBA');
    }
    public function index(){
        $blog = Blog::all();
        return view('blog.home')->with('blog', $blog);;
    }
}