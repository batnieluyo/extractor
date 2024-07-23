<?php

namespace TheAi\Extractor\Text\Loaders\Textract;

use TheAi\Extractor\Contracts\TextLoader;
use TheAi\Extractor\Text\TextContent;

/**
 * Takes the input and sends it directly to Textract, meant for images, does not work for PDFs or very large files,
 * However it is faster when dealing with normal-sized images.
 */
class Textract implements TextLoader
{
    public function __construct(protected TextractService $textractService)
    {
    }

    public function load(mixed $data): ?TextContent
    {
        return new TextContent(
            $this->textractService->bytesToText($data)
        );
    }
}
