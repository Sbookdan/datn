<?php

namespace Database\Seeders;
use App\Models\publisher;

use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publisher::create([
            'name' => 'NXB Lao Động',
        ]);
        publisher::create([
            'name' => 'NXB Thông Tin Và Truyền Thông',
        ]);
        publisher::create([
            'name' => 'NXB Văn Học',
        ]);
        publisher::create([
            'name' => 'NXB Thời Đại',
        ]);
        publisher::create([
            'name' => 'Đang Cập Nhật',
        ]);
        publisher::create([
            'name' => 'NXB Lao Động Xã Hội',
        ]);
        publisher::create([
            'name' => 'NXB Đại Học Kinh Tế Quốc Dân',
        ]);
        publisher::create([
            'name' => 'NXB Tổng hợp thành phố HCM',
        ]);
        publisher::create([
            'name' => 'NXB Trẻ',
        ]);
        publisher::create([
            'name' => 'NXB Thế Giới',
        ]);
        publisher::create([
            'name' => 'NXB Công Thương',
        ]);
        publisher::create([
            'name' => 'NXB Tổng hợp thành phố HCM',
        ]);
        publisher::create([
            'name' => 'NXB Thanh Niên',
        ]);
        publisher::create([
            'name' => 'NXB Phụ Nữ',
        ]);
        publisher::create([
            'name' => 'NXB Văn Hóa Văn Nghệ',
        ]);
        publisher::create([
            'name' => 'NXB Hội Nhà Văn',
        ]);
        publisher::create([
            'name' => 'NXB Dân Trí',
        ]);
    }
}
