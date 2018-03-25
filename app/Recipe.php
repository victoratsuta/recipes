<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    const DELIMITER = ', ';

    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'description',
        'ingredients',
    ];

    static public function explodeIngredients($data)
    {

        $ingredients = [];

        foreach ($data as $ingredient) {
            $ingredients[] = $ingredient;
        }

        return implode(self::DELIMITER, $ingredients);
    }

    static public function getCommonIngredients($recipes)
    {

        $ingredients = [];

        foreach ($recipes as $recipe) {
            $ingredientsForRecipe = explode(self::DELIMITER, self::findOrFail($recipe)->ingredients);

            foreach ($ingredientsForRecipe as $ingredientForRecipe) {
                if (!in_array($ingredientForRecipe, $ingredients)) {
                    $ingredients[] = $ingredientForRecipe;
                }
            }
        }

        return $ingredients;

    }

}
