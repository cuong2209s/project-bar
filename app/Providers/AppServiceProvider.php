<?php

namespace App\Providers;

use App\Repositories\CategoryDrinkRepository;
use App\Repositories\CategoryDrinkRepositoryInterface;
use App\Repositories\DrinkRepository;
use App\Repositories\DrinkRepositoryInterface;
use App\Repositories\StaffRepositoryInterface;
use App\Repositories\StaffRepository;
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
        $this->app->bind(StaffRepositoryInterface::class, StaffRepository::class);
        $this->app->bind( CategoryDrinkRepositoryInterface::class, CategoryDrinkRepository::class);
        $this->app->bind( DrinkRepositoryInterface::class, DrinkRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
