<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs',['blogs'=>$blogs]);
    }
}
