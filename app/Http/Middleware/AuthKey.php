<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has("api_key")) {
            return response()->json([
              'status' => 401,
              'message' => 'Acceso no autorizado',
            ], 401);
          }
      
          if ($request->has("api_key")) {
            $api_key = "4402e53b0b61c5c8d6f85216e8ce6ea8";
            if ($request->input("api_key") != $api_key) {
              return response()->json([
                'status' => 401,
                'message' => 'Acceso no autorizado',
              ], 401);
            }
          }
      
    }
}
