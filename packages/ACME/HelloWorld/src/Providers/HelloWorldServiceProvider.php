<?php 

namespace ACME\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;

/**
* HelloWorld service provider
*
*/
class HelloWorldServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';
        
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'helloworld');
        
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {

    }
}