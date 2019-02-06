<?php

namespace Eduardofg87\Poetry;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eduardofg87\Poetry\Skeleton\SkeletonClass
 */
class PoetryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'poetry';
    }
}
