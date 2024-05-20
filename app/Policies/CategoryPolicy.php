<?php

namespace App\Policies;

use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(Category $user)
{
    // Hanya admin yang dapat melihat daftar produk
    return $user->isAdmin();
}

public function view(Category $user, Category $product)
{
    // Logika otorisasi untuk melihat detail produk
}

public function create(Category $user)
{
    // Logika otorisasi untuk membuat produk baru
}

public function update(Category $user, Category $product)
{
    // Logika otorisasi untuk memperbarui produk
}

public function delete(Category $user, Category $product)
{
    // Logika otorisasi untuk menghapus produk
}

}
