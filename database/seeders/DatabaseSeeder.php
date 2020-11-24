<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\AttachedSeeder;
use Database\Seeders\BannerSeeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\PaymentSeeder;
use Database\Seeders\PublisherSeeder;
use Database\Seeders\ShippingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProductsSeeder::class);
        $this->call(AttachedSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(ShippingSeeder::class);
    }
}