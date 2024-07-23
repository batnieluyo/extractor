<?php

namespace TheAi\Extractor\Extraction\Builtins;

use TheAi\Extractor\Extraction\Extractor;
use InvalidArgumentException;

class Simple extends Extractor
{
    public function viewName(): string
    {
        return $this->config('view') ?? throw new InvalidArgumentException('No view provided');
    }
}
