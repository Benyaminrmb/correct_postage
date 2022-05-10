<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\MainApiController;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserToken
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $MainApiController = new MainApiController();
        if (isset($request->token)) {
            $checkUser=User::where('token',$request->token)->first();
             if ($checkUser) {
                return $next($request);
            }
            return $MainApiController->customJsonResponse('wrong token', 'error', '403');
        }
        return $MainApiController->customJsonResponse('missing token', 'error', '403');
    }
}
