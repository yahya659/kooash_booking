<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // إذا المستخدم مسجل دخول و is_admin = true يسمح له
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // إذا لم يكن أدمن، اعيد التوجيه للصفحة الرئيسية أو رسالة خطأ
        return redirect('/')->with('error', 'ليس لديك صلاحية الوصول لهذه الصفحة.');
    }
}
