<?php

namespace App\Policies;

use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(Product $user)
{
    // Hanya admin yang dapat melihat daftar produk
    return $user->isAdmin();
}

public function view(Product $user, Product $product)
{
    // Logika otorisasi untuk melihat detail produk
}

public function create(Product $user)
{
    // Logika otorisasi untuk membuat produk baru
}

public function update(Product $user, Product $product)
{
    // Logika otorisasi untuk memperbarui produk
}

public function delete(Product $user, Product $product)
{
    // Logika otorisasi untuk menghapus produk
}

}
