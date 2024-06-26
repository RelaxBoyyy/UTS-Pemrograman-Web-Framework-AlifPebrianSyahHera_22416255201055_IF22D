<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Policies\CategoryPolicy;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Category::class, 'Category');
    }

    public function index()
{
    $categories = Category::all();
    return response()->json($categories);
}

}
