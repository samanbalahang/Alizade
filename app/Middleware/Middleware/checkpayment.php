<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class checkpayment
{
    public function handle(Request $request, Closure $next)
    {
        $uid = Session::get('uid');
        $check = checkPaymetStatus($uid);
        if($check){
            return $next($request);
        }else{
            return redirect(route('panel_payment_factor'));
        }
    }
}
