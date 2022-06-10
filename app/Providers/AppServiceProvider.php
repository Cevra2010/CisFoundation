<?php

namespace App\Providers;

use CisFoundation\Breadcrumbs\Breadcrumbs;
use CisFoundation\CisMenuManager\MenuComponent;
use CisFoundation\CisMenuManager\MenuManager;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('menu',MenuComponent::class);
        MenuManager::boot();
        Breadcrumbs::boot();


        MenuManager::registerMenu('main')
            ->setTemplatePath('layouts.app.menus.main');

        /** Register Home Link */
        MenuManager::get('main')
            ->registerEntry('home')
            ->setText('Start')
            ->setRoute('home')
            ->setIcon('house');

        /** Register modules menu entry */
        MenuManager::get('main')
            ->registerEntry('modules')
            ->setText('Module')
            ->setRoute('modules.index')
            ->setIcon('cubes');
    }
}
