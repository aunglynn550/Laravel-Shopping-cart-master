<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use App\Models\User;

use Auth;
class IsApproved
{

    public function handle($request, Closure $next)
    {
        
        if (! Auth::user()->is_approved && ! Auth::user()->is_admin) {

            return redirect()->route('approval');

            
            }
            return $next($request);
           
        
    }

}