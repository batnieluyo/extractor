<?php

namespace TheAi\Extractor\Extraction\Builtins;

use TheAi\Extractor\ContactDto;
use TheAi\Extractor\Extraction\Concerns\HasDto;
use TheAi\Extractor\Extraction\Concerns\HasValidation;
use TheAi\Extractor\Extraction\Extractor;

class Contacts extends Extractor
{
    use HasDto;
    use HasValidation;

    public function rules(): array
    {
        return [
            '*.name' => ['required', 'string'],
            '*.title' => ['required', 'string'],
            '*.email' => ['required', 'email'],
            '*.phone' => ['required'],
        ];
    }

    public function dataClass(): string
    {
        return ContactDto::class;
    }

    public function isCollection(): bool
    {
        return true;
    }
}
