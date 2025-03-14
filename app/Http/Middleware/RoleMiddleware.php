<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Xử lý yêu cầu với kiểm tra vai trò.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn chưa đăng nhập.');
        }
        

        $user = Auth::user();

        // Kiểm tra nếu vai trò của người dùng không nằm trong danh sách vai trò được phép
        if (!in_array($user->User_Role, $roles)) {
            return abort(403, 'Bạn không có quyền truy cập.');
        }

        return $next($request);
    }
}
