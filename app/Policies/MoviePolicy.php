<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class MoviePolicy
{
    public function index(User $user)
    {
        return $this->allowIfAdministrator($user);
    }   

    public function show(User $user)
    {
        return $this->allowIfAdministrator($user);
    }

    private function allowIfAdministrator(User $user): Response
    {
        return $user->isAdministrator()
            ? Response::allow()
            : Response::deny('You must be an Algebra administrator.');
    }
}
