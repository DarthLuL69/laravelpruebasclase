<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use App\Models\Shop;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index()
    {
        $snacks = Snack::all();
        return response()->json($snacks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'shop_id' => 'required|exists:shops,id',
        ]);

        $snack = Snack::create($request->all());
        return response()->json($snack, 201);
    }

    public function getIngredientsFromSnack($id)
    {
        $snack = Snack::findOrFail($id);
        return response()->json($snack->ingredients);
    }

    public function show($id)
    {
        $snack = Snack::findOrFail($id);
        return response()->json($snack);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
            'shop_id' => 'sometimes|required|exists:shops,id',
        ]);

        $snack = Snack::findOrFail($id);
        $snack->update($request->all());
        return response()->json($snack);
    }

    public function destroy($id)
    {
        $snack = Snack::findOrFail($id);
        $snack->delete();
        return response()->json(null, 204);
    }

        public function getShopFromSnack($id)
    {
        return response()->json(Snack::findOrFail($id)->shop);
    }
}

