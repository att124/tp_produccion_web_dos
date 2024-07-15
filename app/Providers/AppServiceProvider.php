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
            $categorias = Categoria::all();
            $view->with('categorias', $categorias);
        });
    }
}
