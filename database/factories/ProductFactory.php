<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'code' => fake()->unique()->randomNumber(9, true),
            'status' => fake()->randomElement(["draft", "trash", "published"]),
            'imported_t' => now(),
            'url' => fake()->url(),
            'creator' => fake()->userName(),
            'created_t' => fake()->unixTime(),
            'last_modified_t' => fake()->unixTime(),
            'product_name' => fake()->words(2, true),
            'quantity' => fake()->numerify("### g (# x # u.)"),
            'brands' => fake()->words(2, true),
            'categories' => "Lanches comida, Lanches doces, Biscoitos e Bolos, Bolos, Madalenas",
            'labels' => "Contem gluten, Contém derivados de ovos, Contém ovos",
            'cities' => "",
            'purchase_places' => fake()->city(),
            'stores' => fake()->word(),
            'ingredients_text' => fake()->text(),
            'traces' => fake()->text(50),
            'serving_size' => fake()->word() . fake()->numerify("##.# g"),
            'serving_quantity' => fake()->randomFloat(1, 20, 50),
            'nutriscore_score' => fake()->numberBetween(20, 50),
            'nutriscore_grade' => fake()->randomLetter(),
            'main_category' => "en:madeleines",
            'image_url' => fake()->url(),
        ];
    }
}