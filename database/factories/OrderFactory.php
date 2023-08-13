<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'price' => fake()->numberBetween(1000, 9999),
        ];
    }
}
