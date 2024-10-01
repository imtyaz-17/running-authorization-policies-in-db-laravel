<?php

namespace App\Policies;

use App\Customer;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;
    public function view(User $user, Customer $customer){
        return $user->is_owner || $user->id===$customer->sales_rep_id;
    }
}
