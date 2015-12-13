<?php

namespace Limatheus\SmsGateway;


use Illuminate\Support\ServiceProvider;

class SmsGatewayServiceProvider extends ServiceProvider
{

    protected $email;
    protected $password;

    public function boot()
    {
        $this->publishes([__DIR__.'/config/smsgateway.php' => config_path('smsgateway.php')]);
        $this->email = config('smsgateway.email');
        $this->password = config('smsgateway.password');
    }

    public function register()
    {
        $this->app->singleton('smsgateway', function(){

            return new SmsGateway($this->email, $this->password);
        });
    }
}