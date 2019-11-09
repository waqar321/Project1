<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $age= 20;
        if($age==20){
           return redirect('test')->with("status", "You are eligible");
        }else{
             return redirect('test')->with("status", "You are not eligible ");
        }

        return $next($request);
    }
}
