<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\StoreTagRequest;
use App\Models\Teg;
use Illuminate\Http\Request;

class StoreTagController extends Controller
{
    public function __invoke(StoreTagRequest $request)
    {
        $data = $request->validated();
        Teg::firstOrCreate($data);
        return redirect()->route('teg.index');
    }
}
