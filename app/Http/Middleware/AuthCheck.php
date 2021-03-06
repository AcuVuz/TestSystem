<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class AuthCheck
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
        if (!$request->session()->has('user_id')) {
            echo '<script>location.replace("/");</script>'; exit;
        } else {
            $user = DB::table('users')->where(['id' => session('user_id')])->first();
            if ($user->is_block == 'T') 
            {
                AuthCheck::logOut($request);
            }
            else 
            {
                DB::table('users')->where('id', session('user_id'))->update(['last_active' => date("Y-m-d H:i:s",time())]);
                $role = DB::table('roles')
                    ->leftJoin('user_roles', 'user_roles.role_id', '=', 'roles.id')
                    ->select('roles.*')
                    ->where('user_roles.user_id', session('user_id') )->first();
                session(['role_id' => $role->id]); 
                if ($role->id > 0 && $role->id < 5)
                    return $next($request);
                else 
                {
                    AuthCheck::logOut($request);
                }
            }
        }
    }

    function logOut($request)
    {
        $request->session()->getHandler()->destroy($request->session()->getID());
        echo '<script>location.replace("/");</script>'; exit;
    }
}
