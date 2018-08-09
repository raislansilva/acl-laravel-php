<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\modelNotice;
use App\User;
use App\permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //\App\modelNotice::class => \App\Policies\noticePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       /* Gate::define('autorizar', function(User $user , modelNotice $notice){
            return $user->id == $notice->user_id;
        });*/

        $permissions = permission::with('roles')->get();
        
        foreach($permissions as $permission){

            Gate::define($permission->name, function(User $user) use ($permission){
            return $user->hasPermission($permission);
            });
        }
    }
}
