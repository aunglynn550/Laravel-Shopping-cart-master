<?php
namespace App\Isop;
use Illuminate\Support\Facades\Facade;
class IsopFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'isop';
    }
}