<?php

namespace App\Http\Controllers;
use App\Interfaces\MyInterface;

class StoreController implements MyInterface
{
    public function getName(){
        return 'Ko aung';
    }
}