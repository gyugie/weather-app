<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Closure;
//use Dingo\Api\Http\Middleware\Auth;

class ApiAuth
{
    public function handle($request, Closure $next)
    {
//        $route = $this->router->getCurrentRoute();
//        if (! $this->auth->check(false)) {
//            $this->auth->authenticate($route->getAuthenticationProviders());
//        }

        return $next($request);
    }
}

