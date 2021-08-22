<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use \App\Models\LineItem;
use \App\Models\Order;
use \App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LineItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 5),
            'product_id' => Product::factory()->create()->id
        ];
    }
}

