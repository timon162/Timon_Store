<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use function Psy\bin;
use Illuminate\Support\Facades\View;
use App\Services\Interfaces\CategoryInterfaceService;
use App\Services\Interfaces\ProductInterfaceService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\Interfaces\CategoryInterfaceRepository::class,
            \App\Repositories\CategoryRepository::class
        );
        $this->app->bind(
            \App\Services\Interfaces\CategoryInterfaceService::class,
            \App\Services\CategoryService::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\ProductInterfaceRepository::class,
            \App\Repositories\ProductRepository::class
        );

        $this->app->bind(
            \App\Services\Interfaces\ProductInterfaceService::class,
            \App\Services\ProductService::class
        );

        $this->app->bind(
            \App\Services\Interfaces\PartialInterfaceService::class,
            \App\Services\PartialService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with([
                'dataCategory'     => app(CategoryInterfaceService::class)->groupCategoryName(),
                'datSetProduct'    => app(ProductInterfaceService::class)->getNameSetProduct(),
                'dataAlbumProduct' => app(ProductInterfaceService::class)->getNameDetailAlbumProduct(),
            ]);
        });
    }
}
