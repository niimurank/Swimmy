<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS','on');
        //60秒を1分へ変換し、M:SS.ミリセカンド(2桁)で表示
        Blade::directive('formatTime', function ($expression) {
        return "<?php
            \$totalSeconds = {$expression};
            \$minutes = (\$totalSeconds / 100);
            \$seconds = fmod(\$totalSeconds, 100);
            echo sprintf('%01d', \$minutes) . ':' . sprintf('%05.2f', \$seconds);
            ?>";
        });
    }
}
