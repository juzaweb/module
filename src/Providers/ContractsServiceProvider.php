<?php

namespace Theanh\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Theanh\Modules\Contracts\RepositoryInterface;
use Theanh\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
