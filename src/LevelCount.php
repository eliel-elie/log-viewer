<?php

namespace Elielelie\LogViewer;

class LevelCount
{
    public Level $level;
    public int $count = 0;
    public bool $selected = false;

    public function __construct(Level $level, int $count = 0, bool $selected = false) {
        $this->level = $level;
        $this->count = $count;
        $this->selected = $selected;
    }
}
