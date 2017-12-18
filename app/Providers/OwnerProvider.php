<?php
    use App\Auth\CustomUserProvider;
    use Illuminate\Support\ServiceProvider; 

    class OwnerProvider extends ServiceProvider{
        public function boot(){
            $this->app['auth']->extend('owner', function(){
                return new CustomUserProvider();
            });
        }
        public function register(){
            
        }
    }