<?php

namespace Shigetaa\Tinymce;

use Illuminate\Support\ServiceProvider;

class TinymceServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/tinymce.php' => base_path('config/tinymce.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/assets/js/tinymce/' => base_path('public/vendor/js/tinymce')
        ], 'public');

        $this->publishes([
            __DIR__.'/resources/views/' => base_path('resources/views/vendor/tinymce')
        ], 'resources');

        $this->loadViewsFrom(__DIR__.'/resources/views','tinymce');
    }

    public function register()
    {

    }

}