<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Thêm dòng này để sử dụng DB

class dcd_quantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dcdmatkhau = md5('123456a@');
        DB::table('dcd_quantri')->insert([
            'dcdtaikhoan' => "chiduj@gmail.com",
            "dcdmatkhau" => $dcdmatkhau,
            'dcdtrangthai' => 0,
        ]);
        DB::table('dcd_quantri')->insert([
            'dcdtaikhoan' => "0365184434",
            "dcdmatkhau" => $dcdmatkhau,
            'dcdtrangthai' => 0,
        ]);
    }
}
