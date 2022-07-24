<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin' , function(){
            return (auth()->user()->usertype == 'admin');
        });
        Gate::define('supervisor' , function(){
            return (auth()->user()->usertype == 'supervisor');
        });
        Gate::define('user' , function(){
            return (auth()->user()->usertype == 'user');
        });
        $this->registerPolicies();

        //
    }
}
