<?php

namespace Elielelie\LogViewer\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Elielelie\LogViewer\LogFile;

class LogFileDeleted
{
    use Dispatchable;

    public function __construct(
        public LogFile $file
    ) {
    }
}
