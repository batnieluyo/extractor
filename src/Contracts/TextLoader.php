<?php

namespace TheAi\Extractor\Contracts;

use TheAi\Extractor\Text\TextContent;

interface TextLoader
{
    public function load(mixed $data): ?TextContent;
}
