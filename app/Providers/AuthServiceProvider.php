<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Gate::define('create_barang', function (User $user) {
            $userRole = $user->role;

            switch($userRole){
                case 'admin':
                    return true;
                case 'staff':
                    return true;
                default:
                    return false;
            }
        });

        Gate::define('read_barang', function (User $user) {
            $userRole = $user->role;

            switch($userRole){
                case 'admin':
                    return true;
                case 'staff':
                    return true;
                default:
                    return false;
            }
        });

        Gate::define('update_barang', function (User $user) {
            $userRole = $user->role;

            switch($userRole){
                case 'admin':
                    return true;
                case 'staff':
                    return true;
                default:
                    return false;
            }
        });

        Gate::define('delete_barang', function (User $user) {
            $userRole = $user->role;

            switch($userRole){
                case 'admin':
                    return false;
                case 'staff':
                    return false;
                default:
                    return false;
            }
        });
    }
}
