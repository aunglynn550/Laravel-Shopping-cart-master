<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Auth;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        //return view('blogs',['blogs'=>$blogs]);
        return config('app.timezone');
    }
}
