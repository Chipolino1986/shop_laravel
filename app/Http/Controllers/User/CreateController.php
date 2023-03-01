<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Teg;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tags = Teg::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('users.create_user', compact('tags','colors','categories'));
    }
}
