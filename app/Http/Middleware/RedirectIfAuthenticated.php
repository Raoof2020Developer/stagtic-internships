<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard = null)
    {
    if (Auth::guard($guard)->check()) {
        $user_type = Auth::user()->user_type;
        switch ($user_type) {
            case 'student':
                return redirect()->route('student.index');
                break;
            case 'head_of_department':
                return redirect()->route('student.index');
                break;
            default:
                return redirect('/home');
                break;
        }
    }
    return $next($request);
    }
}
