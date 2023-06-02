<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();


        Gate::define('add-product', function ($admin) {
            if ($admin->role == "1") {
                return true;
            }

            return false;
        });

        Gate::define('update-product', function ($admin) {
            if ($admin->role == "1") {
                return true;

            }

            return false;
        });


        Gate::define('list-product', function ($admin) {
            if ($admin->role == "1" || $admin->role == "2") {
                return true;

            }

            return false;
        });
        Gate::define('detail-product', function ($admin) {
            if ($admin->role == "1" || $admin->role == "2") {
                return true;

            }

            return false;
        });
    }
}