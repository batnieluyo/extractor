<?php

namespace TheAi\Extractor\Text\Loaders;

use TheAi\Extractor\Contracts\TextLoader;
use TheAi\Extractor\Text\TextContent;
use TheAi\Extractor\Text\Utils;
use Illuminate\Support\Facades\Http;

class Web implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        return new TextContent(
            content: Utils::cleanHtml(Http::get($data)->throw()->body()),
        );
    }
}
