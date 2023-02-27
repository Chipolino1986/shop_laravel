<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class ShowTagController extends Controller
{
    public function __invoke(Teg $teg)
    {
        return view('tags/show_tag', compact('teg'));
    }
}
