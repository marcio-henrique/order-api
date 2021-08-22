<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use \App\Models\Customer;
use \App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
class OrderFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'total' => 0,
            'customer_id' => Customer::factory()->create()->id
        ];
    }
}
