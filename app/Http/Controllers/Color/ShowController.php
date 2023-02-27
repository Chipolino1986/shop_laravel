<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;


class ShowController extends Controller
{
    public function __invoke(Color $color)
    {
        return view('colors.show_color', compact('color'));
    }
}
