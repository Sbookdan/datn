<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\attached;

class AttachedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        attached::create([
            'name' => 'Cổ tích thần thoại',
            'att_cate_id' => '1',
        ]);
        attached::create([
            'name' => 'Bài học cuộc sống',
            'att_cate_id' => '1',
        ]);
        attached::create([
            'name' => 'Văn học thiếu nhi',
            'att_cate_id' => '1',
        ]);
        attached::create([
            'name' => 'Truyện ma tâm linh',
            'att_cate_id' => '2',
        ]);
        attached::create([
            'name' => 'Khởi nghiệp',
            'att_cate_id' => '3',
        ]);
        attached::create([
            'name' => 'Marketing bán hàng',
            'att_cate_id' => '3',
        ]);
        attached::create([
            'name' => 'Đầu tư tài chính',
            'att_cate_id' => '3',
        ]);
        attached::create([
            'name' => 'Kiến thức kinh tế',
            'att_cate_id' => '3',
        ]);
        attached::create([
            'name' => 'Cổ trang',
            'att_cate_id' => '4',
        ]);
        attached::create([
            'name' => 'Hiện đại',
            'att_cate_id' => '4',
        ]);
        attached::create([
            'name' => 'Xuyên không',
            'att_cate_id' => '4',
        ]);
        attached::create([
            'name' => 'Trùng sinh',
            'att_cate_id' => '4',
        ]);
        attached::create([
            'name' => 'Nghệ thuật sống',
            'att_cate_id' => '5',
        ]);
        attached::create([
            'name' => 'Kỹ năng làm việc',
            'att_cate_id' => '5',
        ]);
        attached::create([
            'name' => 'Hướng nghiệp',
            'att_cate_id' => '5',
        ]);
        attached::create([
            'name' => 'Kỹ năng sống',
            'att_cate_id' => '5',
        ]);
        attached::create([
            'name' => 'Tiểu thuyết',
            'att_cate_id' => '6',
        ]);
        attached::create([
            'name' => 'Chăm sóc sức khỏe',
            'att_cate_id' => '7',
        ]);
        attached::create([
            'name' => 'Nuôi dạy con',
            'att_cate_id' => '7',
        ]);
        attached::create([
            'name' => 'Tâm lý-giới tính',
            'att_cate_id' => '7',
        ]);
        attached::create([
            'name' => 'Phụ nữ-làm đẹp',
            'att_cate_id' => '7',
        ]);
        attached::create([
            'name' => 'Thơ tản văn',
            'att_cate_id' => '8',
        ]);
        attached::create([
            'name' => 'Truyện dài-tiểu thuyết',
            'att_cate_id' => '8',
        ]);
        attached::create([
            'name' => 'Trinh thám',
            'att_cate_id' => '8',
        ]);
        attached::create([
            'name' => 'Kiếm hiệp',
            'att_cate_id' => '8',
        ]);
        attached::create([
            'name' => 'Nhân vật',
            'att_cate_id' => '9',
        ]);
        attached::create([
            'name' => 'Sự kiện',
            'att_cate_id' => '9',
        ]);
        attached::create([
            'name' => 'Giáo dục',
            'att_cate_id' => '10',
        ]);
        attached::create([
            'name' => 'Chính trị-pháp luật',
            'att_cate_id' => '10',
        ]);
        attached::create([
            'name' => 'Tôn giáo-tâm linh',
            'att_cate_id' => '10',
        ]);
        attached::create([
            'name' => 'Khoa học xã hội',
            'att_cate_id' => '10',
        ]);
        attached::create([
            'name' => 'Văn hóa-nghệ thuật',
            'att_cate_id' => '10',
        ]);
        attached::create([
            'name' => 'Kỹ thuật-công nghệ',
            'att_cate_id' => '11',
        ]);
        attached::create([
            'name' => 'Kiến thức khoa học',
            'att_cate_id' => '11',
        ]);
    }
}
