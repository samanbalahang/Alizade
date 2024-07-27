<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        $admin = check_admin();
        if($admin){
            Session::put('adminDetails',$admin);
            return $next($request);
        }else{
            return redirect(route('admin_login'));
        }
    }
}
