<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_admin == true;
    }

    public function view(User $user, Order $order)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Order $order)
    {
        //
    }

    public function delete(User $user, Order $order)
    {
        //
    }

    public function restore(User $user, Order $order)
    {
        //
    }

    public function forceDelete(User $user, Order $order)
    {
        //
    }
}
