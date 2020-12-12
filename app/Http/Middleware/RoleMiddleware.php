<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * @param $request
     * @param Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        echo '1. Middleware';
        echo '<br>Vai trò:' . $role;
        echo '<br>Thực hiện khi đang xử lý HTTP response';
        return $next($request);
    }

    public function terminate($request, $response)
    {
        echo '<br>3. Terminable Middleware';
        echo '<br>Thực hiện sau khi HTTP response gửi đến trình duyệt';
    }
}
