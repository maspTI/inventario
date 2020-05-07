<?php

namespace App\Http\Middleware;

use Closure;

class Department
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
        if (auth()->user()->department == null) {
            return redirect('http://admin.masp.net.br/users/departments?url=' . config('app.url'));
        }
        // Director
        if (array_intersect([auth()->user()->department_id], [1, 2]) && count(auth()->user()->roles->all())) {
            if (array_intersect(auth()->user()->roles->pluck()->all(), [1])) {
                return $next($request);
            }
        }
        // Manager
        if (array_intersect([auth()->user()->department_id], [8]) && count(auth()->user()->roles->all())) {
            if (array_intersect(auth()->user()->roles->pluck()->all(), [2])) {
                return $next($request);
            }
        }
        // Regular
        if (array_intersect([auth()->user()->department_id], [8])) {
            return $next($request);
        }

        return abort(403, 'Usuário não autorizado');
    }
}
