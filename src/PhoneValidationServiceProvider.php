<?php

declare(strict_types=1);

namespace Slvler\PhoneValidation;

use Illuminate\Support\ServiceProvider;
use Slvler\PhoneValidation\Facades\PhoneValidation;

class PhoneValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Phone', function ($app) {
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
