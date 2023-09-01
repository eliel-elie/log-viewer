<?php

namespace Elielelie\LogViewer\Utils;

use Elielelie\LogViewer\Facades\LogViewer;
use Elielelie\LogViewer\LogFile;
use Elielelie\LogViewer\LogIndex;

class GenerateCacheKey
{
    public static function for($object, string $namespace = null): string
    {
        $key = '';

        if ($object instanceof LogFile) {
            $key = self::baseKey().':file:'.$object->identifier;
        }

        if ($object instanceof LogIndex) {
            $key = self::for($object->file).':'.$object->identifier;
        }

        if (is_string($object)) {
            $key = self::baseKey().':'.$object;
        }

        if (! empty($namespace)) {
            $key .= ':'.$namespace;
        }

        return $key;
    }

    protected static function baseKey(): string
    {
        return 'lv:'.LogViewer::version();
    }
}
