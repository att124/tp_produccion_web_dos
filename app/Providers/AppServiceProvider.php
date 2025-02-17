<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Cargar categorías en el navbar
        View::composer('componentes.navbar', function ($view) {
            $categorias = Categoria::where('visible', 1)->get();
            $view->with('categorias', $categorias);
        });

        View::composer('componentes.footer', function ($view) {
            $categorias = Categoria::where('visible', 1)->get();
            $view->with('categorias', $categorias);
        });
    }
}
