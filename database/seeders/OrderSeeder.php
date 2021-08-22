<?php

namespace Database\Seeders;

use App\Models\LineItem;
use App\Models\Order;
use Illuminate\Database\Seeder;


class OrderSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $orders = Order::factory(10)->create()->each(function($order) {
            LineItem::factory(rand(1, 5))->create(['order_id' => $order->id]);
        });
    }
}
