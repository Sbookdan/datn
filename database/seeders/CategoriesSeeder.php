<?php

namespace Database\Seeders;
use App\Models\categories;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categories::create([
            'name' => 'Thiếu nhi',
        ]);
        categories::create([
            'name' => 'Linh dị',
        ]);
        categories::create([
            'name' => 'Kinh doanh',
        ]);
        categories::create([
            'name' => 'Ngôn tình',
        ]);
        categories::create([
            'name' => 'Kỹ năng',
        ]);
        categories::create([
            'name' => 'Tác phẩm kinh điển',
        ]);
        categories::create([
            'name' => 'Chăm sóc gia đình',
        ]);
        categories::create([
            'name' => 'Văn học',
        ]);
        categories::create([
            'name' => 'Nhân vật-sự kiện',
        ]);
        categories::create([
            'name' => 'Văn hóa-xã hội',
        ]);
        categories::create([
            'name' => 'Khoa học-công nghệ',
        ]);
    }
}
