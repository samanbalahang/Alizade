<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class userAuth
{
    public function handle(Request $request, Closure $next)
    {
        $user = checkUserLogin(request()->ip(),Session::get('webToken'),Session::get('uid'));
        if($user){
            return $next($request);
        }else{
            return redirect()->route("app_login");
        }
    }
}
