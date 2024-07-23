<?php

namespace TheAi\Extractor\Text\Loaders;

use TheAi\Extractor\Contracts\TextLoader;
use TheAi\Extractor\Text\TextContent;
use TheAi\Extractor\Text\Utils;

class Html implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        return new TextContent(
            Utils::cleanHtml($data)
        );
    }
}
