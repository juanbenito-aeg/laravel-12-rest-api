<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ingredient::with("potions")->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "ingredient_name" => "required|string|max:50",
            "price" => "required|integer|between:10,100",
            "rarity" => "required|string|max:50",
        ]);

        return Ingredient::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Ingredient::with("potions")->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $ingredient->update($request->all());

        return $ingredient;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ingredient::destroy($id);
        return response()->json(["message" => "Ingredient deleted"]);
    }
}
