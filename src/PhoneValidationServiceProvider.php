<?php


namespace slvler\PhoneValidation;

use Illuminate\Support\ServiceProvider;
use slvler\PhoneValidation\Facades\PhoneValidation;

class PhoneValidationServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Phone', function($app) {
            return new PhoneValidation();
        });
    }
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }
    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/phone.php' => config_path('phone.php'),
        ], 'phone');
    }
}
