<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InterfasesService extends ServiceProvider
{
    public function register() {
        $this->app->bind('App\libs\CarInterface', 'App\libs\Public\CarEloquent');
    }
}
