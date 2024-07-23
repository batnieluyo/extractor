<?php

namespace TheAi\Extractor\Text\Loaders;

use TheAi\Extractor\Contracts\TextLoader;
use TheAi\Extractor\Text\TextContent;

class Text implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        return new TextContent($data);
    }
}
