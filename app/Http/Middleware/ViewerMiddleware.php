<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User_Role;
use App\Models\Role;

class ViewerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            $user = Auth::user();
            $user_role = User_Role::where('user_id', $user->id)->first();
            $role = Role::where('id', $user_role->role_id)->first();


            if ($role->role == 'Viewer') {
                return $next($request);
            }
        }
        abort(401, 'Unauthorized');
    }
}
