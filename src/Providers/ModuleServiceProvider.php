<?php
/**
 * Copyright (c) 2017. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace Terakyan\CssMaker\Providers;
use Illuminate\Support\ServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        dd(55);
        $this->loadTranslationsFrom(__DIR__ . '/../views', 'css-maker');
        $this->loadViewsFrom(__DIR__ . '/../views', 'css-maker');

        \Eventy::action('admin.menus', [
            "title" => "Studio",
            "custom-link" => "#",
            "icon" => "fa fa-bug",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "CssMaker",
                    "custom-link" => "/admin/studio/css-maker",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]]);

        \Sahakavatar\Cms\Models\Routes::registerPages('terakyan/css-maker');
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }

}

