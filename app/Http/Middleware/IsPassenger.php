<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsPassenger
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
        $passengerRole=Role::where('name','Passenger')->first();
        if(Auth::User()->role_id!==$passengerRole->id){
            return redirect(url('/1'));
        }
        return $next($request);

    }
}
