<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    // Jika Anda tidak ingin menggunakan timestamps, Anda bisa mengatur $timestamps menjadi false
    public $timestamps = true;
}
