<?php
namespace ProcessDrive\LaravelCloudTranslation;

use Illuminate\Support\ServiceProvider;


class CloudTranslationServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->commands([
            TranslationStoreCommand::class,
        ]);

        $this->publishes([
            __DIR__.'config/translation-loader.php' => config_path('translation-loader.php')
        ], 'config');
    }

    public function register() {  
        $this->loadViewsFrom(__DIR__.'/views', 'LaravelCloudTranslation');
        $this->app->register(\Spatie\TranslationLoader\TranslationServiceProvider::class);
    }
}