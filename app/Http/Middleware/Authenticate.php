<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson() && !$request->routeIs('admin.*', 'client.*', 'peserta.*')) {
            if ($request->user() && $request->user()->role == 'admin') {
                return route('admin.dashboard');
            }

            if ($request->user() && $request->user()->role == 'client') {
                return route('client.dashboard');
            }

            if ($request->user() && $request->user()->role == 'peserta') {
                return route('peserta.dashboard');
            }
        }

        return $request->expectsJson() ? null : route('login');
    }
}
