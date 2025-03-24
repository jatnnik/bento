<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

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
        $this->configureModels();
        $this->configureCommands();
        $this->configureDates();
    }

    /**
     * Configure the applications models.
     */
    protected function configureModels(): void
    {
        Model::shouldBeStrict();
        Model::unguard();
    }

    /**
     * Configure the applications commands.
     */
    protected function configureCommands(): void
    {
        DB::prohibitDestructiveCommands(
            $this->app->isProduction()
        );
    }

    /**
     * Configure the applications dates (use immutable dates by default).
     * Note: Remember to use the `Date` facade instead of `Carbon`.
     */
    protected function configureDates(): void
    {
        Date::use(CarbonImmutable::class);
    }
}
