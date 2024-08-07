<?php

namespace TheAi\Extractor\Facades;

use TheAi\Extractor\Text\Factory;
use Illuminate\Support\Facades\Facade;

/**
 * @see Factory
 */
class Text extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
