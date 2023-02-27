<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\UpdateTagRequest;
use App\Models\Teg;
use Illuminate\Http\Request;

class UpdateTagController extends Controller
{
    public function __invoke(UpdateTagRequest $request, Teg $teg)
    {
        $data = $request->validated();
        $teg->update($data);

        return view('tags/show_tag', compact('teg'));
    }
}
