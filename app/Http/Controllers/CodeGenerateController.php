<?php

namespace App\Http\Controllers;
// use Zorb\Promocodes\Facades\Promocodes;
 
 //use App\Promocode\Promocode;
use Promocodes;

class CodeGenerateController extends Controller
{
    public function index()
    {
        // $promocode=new Promocodes();
        // $promocode// default: []
        //   ->create(10,100,'ABCDE',1);

        Promocodes::mask('AA-***-BB') // default: config('promocodes.code_mask')
        ->characters('ABCDE12345') // default: config('promocodes.allowed_symbols')
        ->multiUse() // default: false
        ->unlimited() // default: false
        ->boundToUser() // default: false
        ->user(User::find(1)) // default: null
        ->count(5) // default: 1
        ->usages(5) // default: 1
        ->expiration(now()->addYear()) // default: null
        ->details([ 'discount' => 50 ]) // default: []
        ->create();
        

    }
}
