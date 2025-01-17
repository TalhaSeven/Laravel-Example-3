<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>fake()->title(),
            "description"=>fake()->paragraph(),
            "status"=>rand(0,1),
            "amount"=>rand(0,1000),
            "date_time"=>date("Y-m-d H:m:s"),
            "category_id"=>rand(1,4),
        ];
    }
}
