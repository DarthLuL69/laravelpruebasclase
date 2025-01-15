<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return response()->json($shop);
    }

    public function store(Request $request)
    {
        $shop = Shop::create($request->all());
        return response()->json($shop, 201);
    }

    public function showDrinks($id)
    {
        $shop = Shop::findOrFail($id);
        return response()->json($shop->drinks);
    }
}
