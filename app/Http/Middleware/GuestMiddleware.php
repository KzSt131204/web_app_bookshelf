<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */public function handle($request, Closure $next)
    {
        // ゲストユーザーの場合に特定の機能を制限
      if (Auth::check() && Auth::user()->is_guest) {
        // 制限が必要な場合の処理
        $currentRoute = $request->route()->getName();
        
        if ($currentRoute === 'books.newBook' || $currentRoute === 'books.add') {
            return redirect('/books')->with('error', 'ゲストユーザーはこの機能にアクセスできません。');
        }
    }

        return $next($request);
    }
}
