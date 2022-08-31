<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApprovedController extends Controller
{

    public function index()
    {
        $users = User::where('is_approved',0)->get();
        return view('admin/User/user-approved',['users'=>$users]);
    }
    public function approve()
    {
    
    }
}