<?php

namespace GulzarAli\Calculator;
use Illuminate\Support\ServiceProvider;
class CalculatorServiceProvider extends ServiceProvider {
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','calculator');
        if ($this->app->runningInConsole()) {
            $this->publishes([
              __DIR__.'/resources/assets' => public_path('calculatorAssets'),
            ], 'assets');
        }
    }
    public function register(){

    }
}