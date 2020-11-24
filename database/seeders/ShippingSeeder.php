<?php

namespace Database\Seeders;
use App\Models\shipping_fee;

use Illuminate\Database\Seeder;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shipping_fee::create([
            'name' => 'Giao Hỏa Tốc',
            'price_ship' => 20.000,
        ]);
        shipping_fee::create([
            'name' => 'Giao Tiêu Chuẩn',
            'price_ship' => '10.000',
        ]);
    }
}
