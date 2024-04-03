<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                // Check logic
                /*
                    Lấy được session hiên tại (sesionId)
                    So sánh với sesionId trong bảng users
                    --> Nếu KN xử lý logout (Kèm theo message) 
                    --> còn GN bỏ qua
                */
                $checkDevice = $this->checkDevice($request);
                if (!$checkDevice){
                    $this->unauthenticated($request, $guards);
                }
                return $this->auth->shouldUse($guard);
            }
        }

        $this->unauthenticated($request, $guards);
    }

    private function checkDevice($request){
        $sesionId = $request->session()->getId();
        $user = $request->user();
        $lastSesionId = $user->last_session;
        if ($lastSesionId !== $lastSesionId) {
            Auth::logout();
            return false;
        }
        return true;
    }
}
