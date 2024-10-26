<?php

namespace MyCompany\Multilang;

use Illuminate\Support\ServiceProvider;

class MultilangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // نشر ملفات الترجمة
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'multilang');

        // نشر إعدادات الحزمة
        $this->publishes([
            __DIR__.'/../config/multilang.php' => config_path('multilang.php'),
        ], 'config');
    }

    public function register()
    {
        // دمج إعدادات الحزمة
        $this->mergeConfigFrom(
            __DIR__.'/../config/multilang.php', 'multilang'
        );
    }
}
