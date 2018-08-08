<?php

namespace App\Policies;

use App\User;
use App\modelNotice;
use Illuminate\Auth\Access\HandlesAuthorization;

class noticePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function autorizar(User $user , modelNotice $notice){
            
        return $user->id == $notice->user_id;
        
    }
}
