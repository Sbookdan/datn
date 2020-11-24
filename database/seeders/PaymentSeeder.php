<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\payment_methods;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        payment_methods::create([
            'name' => 'Thanh toán bằng MoMo',
            'avatar' => 'momo.png',
        ]);
        payment_methods::create([
            'name' => 'Thanh toán bằng ZaloPay',
            'avatar' => 'zalo.png',
        ]);
        payment_methods::create([
            'name' => 'Thanh toán khi nhận hàng',
            'avatar' => 'money.png',
        ]);
        payment_methods::create([
            'name' => 'Thanh toán bằng thẻ',
            'avatar' => 'payment-methods.png',
        ]);
    }
}
