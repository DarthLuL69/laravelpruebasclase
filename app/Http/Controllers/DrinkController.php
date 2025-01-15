<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function store(Request $request)
    {
        $drink = Drink::create($request->all());
        return response()->json($drink, 201);
    }

    public function showShop($id)
    {
        $drink = Drink::findOrFail($id);
        return response()->json($drink->shop);
    }
}
