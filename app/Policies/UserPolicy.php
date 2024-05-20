<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        // Hanya admin yang dapat melihat daftar pengguna
        return $user->isAdmin();
    }

    public function view(User $user, User $model)
    {
        // Hanya admin atau pengguna yang sedang dilihat yang dapat melihat detail pengguna
        return $user->isAdmin() || $user->id === $model->id;
    }

    public function create(User $user)
    {
        // Hanya admin yang dapat membuat pengguna baru
        return $user->isAdmin();
    }

    public function update(User $user, User $model)
    {
        // Hanya admin atau pengguna yang sedang diubah yang dapat mengubah data pengguna
        return $user->isAdmin() || $user->id === $model->id;
    }

    public function delete(User $user, User $model)
    {
        // Hanya admin atau pengguna yang sedang dihapus yang dapat menghapus pengguna
        return $user->isAdmin() || $user->id === $model->id;
    }
}
