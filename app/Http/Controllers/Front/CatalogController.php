<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class CatalogController extends Controller
{
    public function index()
{
    $items = Item::with(['type', 'brand'])->latest()->get()->reverse();
    $types = Type::all();
    $brands = Brand::all();

    return view('catalog', [
        'items' => $items,
        'types' => $types,
        'brands' => $brands,
    ]);
}

}
