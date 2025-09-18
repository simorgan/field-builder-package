<?php

namespace Simonmorgan\FieldBuilder;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FieldBuilderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the 'field' prefix for components
        Blade::componentNamespace('Simonmorgan\\FieldBuilder\\Components', 'getfield');

        // Load views from package
        $this->loadViewsFrom(__DIR__.'/resources/views', 'getfield');

        // Publish views (optional)
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/field-builder'),
        ], 'field-views');
    }
}
