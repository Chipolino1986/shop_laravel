<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        $data['preview_image'] = Storage::disk('public')->put('/images', $data = ['preview_image']);

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];

        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate([
           'name'=>$data['name']
        ], $data);

        foreach ($tagsIds as $tagsId) {
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ]);
        }
        foreach ($colorsIds as $colorsId) {
            Color::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $colorsId,
            ]);
        }

        return redirect()->route('products.index_product');

    }
}
