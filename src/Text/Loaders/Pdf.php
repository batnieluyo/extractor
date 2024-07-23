<?php

namespace TheAi\Extractor\Text\Loaders;

use TheAi\Extractor\Contracts\TextLoader;
use TheAi\Extractor\Text\TextContent;
use Smalot\PdfParser\Parser;

class Pdf implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        $parser = new Parser();
        $parsed = $parser->parseContent($data);
        $text = $parsed->getText();

        return new TextContent($text);
    }
}
