<?php
namespace App\Providers;

use App\User;
use App\Orden;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => \App\Policies\UserPolicy::class,
        Orden::class => \App\Policies\OrdenPolicy::class,
        Orden::class => \App\Policies\OrdenPolicy::class,
        Orden::class => \App\Policies\AccionesOrden::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
