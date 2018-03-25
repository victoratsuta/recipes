<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipe;
use App\Recipe;
use Symfony\Component\HttpFoundation\Request;

class RecipeController extends Controller
{

    public function index(){

        $recipes = Recipe::all();

        return view('index',
            [
                'recipes' => $recipes
            ]
        );

    }

    public function create()
    {
        return view('create');
    }

    public function store(CreateRecipe $request)
    {
        Recipe::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'ingredients' => Recipe::explodeIngredients($request->get('ingredients')),
        ]);

        return redirect()->route('index');
    }

    public function update($recipeId)
    {
        $recipe = Recipe::find($recipeId);

        return view('update',
            [
                'recipe' => $recipe
            ]
        );
    }

    public function edit(CreateRecipe $request)
    {
        Recipe::find($request->get('recipeId'))
            ->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'ingredients' => Recipe::explodeIngredients($request->get('ingredients')),
        ]);

        return redirect()->route('index');
    }

    public function show($recipeId)
    {
        $recipe = Recipe::find($recipeId);

        return view('show',
            [
                'recipe' => $recipe
            ]
        );
    }

    public function remove($recipeId){

        Recipe::find($recipeId)->delete();

        return redirect()->route('index');

    }
    public function ingredients(Request $request)
    {
        $recipes = $request->get('recipe');



        return view('ingredients',
            [
                'ingredients' => Recipe::getCommonIngredients($recipes)
            ]
        );
    }
}
