<?php

namespace TheAi\Extractor\Text\Loaders;

use TheAi\Extractor\Contracts\TextLoader;
use TheAi\Extractor\Text\TextContent;
use Jstewmc\Rtf\Document;

class Rtf implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        $document = new Document($data);
        $text = $document->getRoot()->toText();

        return new TextContent($text);
    }
}
