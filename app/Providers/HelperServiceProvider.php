<?php

namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    protected $helpers = ['helper'];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->helpers as $helper) {
            $helper_path = app_path().'/Helpers/'.$helper.'.php';

            if (File::isFile($helper_path)) {
                require_once $helper_path;
            }
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
}
