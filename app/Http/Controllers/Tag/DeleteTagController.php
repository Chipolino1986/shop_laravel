<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class DeleteTagController extends Controller
{
    public function __invoke(Teg $teg)
    {
        $teg->delete();
        return redirect()->route('index');
    }
}
