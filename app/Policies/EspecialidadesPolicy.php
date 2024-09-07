<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Especialidades;
use MoonShine\Models\MoonshineUser;

class EspecialidadesPolicy
{
    use HandlesAuthorization;

    public function viewAny(MoonshineUser $user): bool
    {
        return true;
    }

    public function view(MoonshineUser $user, Especialidades $item): bool
    {
        return $user->isSuperUser();
    }

    public function create(MoonshineUser $user): bool
    {
        return true;
    }

    public function update(MoonshineUser $user, Especialidades $item): bool
    {
        return true;
    }

    public function delete(MoonshineUser $user, Especialidades $item): bool
    {
        return true;
    }

    public function restore(MoonshineUser $user, Especialidades $item): bool
    {
        return true;
    }

    public function forceDelete(MoonshineUser $user, Especialidades $item): bool
    {
        return true;
    }

    public function massDelete(MoonshineUser $user): bool
    {
        return true;
    }
}
