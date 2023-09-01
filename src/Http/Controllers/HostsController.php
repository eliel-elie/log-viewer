<?php

namespace Elielelie\LogViewer\Http\Controllers;

use Elielelie\LogViewer\Facades\LogViewer;
use Elielelie\LogViewer\Http\Resources\LogViewerHostResource;

class HostsController
{
    public function index()
    {
        return LogViewerHostResource::collection(
            LogViewer::getHosts()
        );
    }
}
