<?php

namespace Infinitypaul\LaravelGuardedSubmit;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Infinitypaul\LaravelGuardedSubmit\Skeleton\SkeletonClass
 */
class LaravelGuardedSubmitFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-guarded-submit';
    }
}
