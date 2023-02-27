<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class IndexTagController extends Controller
{
    public function __invoke()
    {
        $tags = Teg::all();
        return view('tags/index_tag', compact('tags'));
    }
}
