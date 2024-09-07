<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Medico;
use MoonShine\Models\MoonshineUser;

class MedicoPolicy
{
    use HandlesAuthorization;

    public function viewAny(MoonshineUser $user): bool
    {
        return true;
    }

    public function view(MoonshineUser $user, Medico $item): bool
    {
        return true;
    }

    public function create(MoonshineUser $user): bool
    {
        return true;
    }

    public function update(MoonshineUser $user, Medico $item): bool
    {
        return true;
    }

    public function delete(MoonshineUser $user, Medico $item): bool
    {
        return true;
    }

    public function restore(MoonshineUser $user, Medico $item): bool
    {
        return true;
    }

    public function forceDelete(MoonshineUser $user, Medico $item): bool
    {
        return true;
    }

    public function massDelete(MoonshineUser $user): bool
    {
        return true;
    }
}
