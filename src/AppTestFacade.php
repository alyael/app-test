<?php

namespace Alyael\AppTest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alyael\AppTest\Skeleton\SkeletonClass
 */
class AppTestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'app-test';
    }
}
