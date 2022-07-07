<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckStaffLevel
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!Auth::check()) {
            //nếu chưa đăng nhập thì về trang login
            return redirect()->route('my-login');
        }
        if(Auth::user()->level==1){
            //thông báo không được phép truy cập với user bình thường
            return redirect()->route('restrict-notice');
        }
        //cho phép truy cập
        return $next($request);
    }
}
