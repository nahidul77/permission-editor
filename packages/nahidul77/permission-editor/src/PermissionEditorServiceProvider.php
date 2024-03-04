<?php

namespace Nahidul77\PermissionEditor;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PermissionEditorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::prefix('permission-editor')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . './../routes/web.php');
            });

        $this->loadViewsFrom(__DIR__ . './../resources/views', 'permission');
    }
}
