<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class EditTagController extends Controller
{
    public function __invoke(Teg $teg)
    {
        return view('tags/edit_tag', compact('teg'));
    }
}
