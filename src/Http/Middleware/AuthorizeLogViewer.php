<?php

namespace Elielelie\LogViewer\Http\Middleware;

use Elielelie\LogViewer\Facades\LogViewer;

class AuthorizeLogViewer
{
    public function handle($request, $next)
    {
        LogViewer::auth();

        return $next($request);
    }
}
