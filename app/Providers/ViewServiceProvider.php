<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $carrito = session('carrito', []);
            $total = array_sum(array_column($carrito, 'cantidad'));
            $view->with('totalProductosCarrito', $total);
        });
    }

    public function register(): void
    {
        //
    }
}
