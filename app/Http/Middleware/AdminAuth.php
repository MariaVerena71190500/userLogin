<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role = null)
    {
        if (auth()->check()) {
            $user = auth()->user();
            
            // Ganti 'admin' dengan peran yang sesuai untuk admin
            if ($user && $user->role === $role) {
                return $next($request);
            }
            // elseif ($user && $user->role === $role  ) {
            //     return $next($request);
            // }
            // elseif ($user->role === 'jemaat') {
            //     return $next($request);
            // }
            // elseif ($user->role === 'keuangan') {
            //     return $next($request);
            // }
            return redirect()->route('getLogin')->with('error','Login terlebih dahulu!'); // Gantilah dengan rute yang sesuai

        }


        return response()
        ->view('admin.login')
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
   
    }

}
    


