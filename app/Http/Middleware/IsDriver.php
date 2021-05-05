<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDriver
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $driverRole=Role::where('name','Driver')->first();
        if(Auth::User()->role_id!==$driverRole->id){
            return redirect(url('/'));
        }
        return $next($request);
    }
}
