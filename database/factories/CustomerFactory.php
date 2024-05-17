<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->name(),
            "date"=>fake()->date("Y-m-d H:m:s"),
            "date_time"=>fake()->date("Y-m-d H:m:s"),
            "amount"=>rand(0,1000),
            "tax"=>rand(0.00,50.00),
            "piece"=>rand(0,1000),
            "time"=>fake()->date("Y-m-d H:m:s"),
            "product_id"=>rand(0,100),
        ];
    }
}
