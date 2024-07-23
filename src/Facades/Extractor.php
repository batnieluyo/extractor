<?php

namespace TheAi\Extractor\Facades;

use TheAi\Extractor\ExtractorManager;
use Illuminate\Support\Facades\Facade;

/**
 * @see ExtractorManager
 */
class Extractor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ExtractorManager::class;
    }
}
