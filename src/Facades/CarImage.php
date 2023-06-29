<?php

namespace Programic\LaravelCarImage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Programic\LaravelCarImage\CarImage
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Programic\LaravelCarImage\CarImage::class;
    }
}
