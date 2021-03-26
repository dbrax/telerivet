<?php

namespace Epmnzava\Telerivet;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\Telerivet\Skeleton\SkeletonClass
 */
class TelerivetFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'telerivet';
    }
}
