<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('database.default') === 'sqlite') {
            $database = config('database.connections.sqlite.database');

            if ($database) {
                $directory = dirname($database);

                if (! is_dir($directory)) {
                    mkdir($directory, 0755, true);
                }

                if (! file_exists($database)) {
                    touch($database);
                }
            }
        }
    }
}
