<?php

namespace TheAi\Extractor\Contracts;

use TheAi\Extractor\Extraction\Extractor;
use TheAi\Extractor\Text\TextContent;

interface Engine
{
    public function run(
        Extractor $extractor,
        TextContent|string $input,
    ): mixed;
}
