<?php

namespace Elielelie\LogViewer\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Elielelie\LogViewer\LogFile;

class LogFileDeleted
{
    use Dispatchable;
    public LogFile $file;

    public function __construct(LogFile $file) {
        $this->file = $file;
    }
}
