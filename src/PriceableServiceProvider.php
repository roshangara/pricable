<?php

namespace Roshangara\Priceable;

use Illuminate\Support\ServiceProvider;

class PriceableServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
