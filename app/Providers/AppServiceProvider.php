<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', function (User $user) {
            return $user->level === 'Ketua SPI';
        });
        Gate::define('auditor', function (User $user) {
            return $user->level === 'Auditor';
        });
        Gate::define('auditee', function (User $user) {
            return $user->level === 'Auditee';
        });
        Gate::define('direktur', function (User $user) {
            return $user->level === 'Direktur';
        });
    }
}
