<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->removePublicFromURl();
    }

    protected function removePublicFromURl()
    {
        if (Str::contains(request()->getRequestUri(), '/public/')) {
            $url = str_replace('public/', '', request()->getRequestUri());
            if (strlen($url) > 0) {
                header("Location: $url", true, 301);
                exit;
            }
        }
    }
}
