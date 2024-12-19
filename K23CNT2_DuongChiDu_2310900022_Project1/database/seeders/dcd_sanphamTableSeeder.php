<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dcd_sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'vp001',
            'dcdtensanpham'  =>"cay phu quy",
            'dcdhinhanh'=>"images/san-pham/vp001.jpg",
            'dcdsoluong'=>100,
            'dcddongia'=>699000,
            'dcdmaloai'=>1,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'vp002',
            'dcdtensanpham'  =>"cay dai phu quy",
            'dcdhinhanh'=>"images/san-pham/vp002.jpg",
            'dcdsoluong'=>200,
            'dcddongia'=>550000,
            'dcdmaloai'=>1,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'vp003',
            'dcdtensanpham'  =>"cay hanh phuc",
            'dcdhinhanh'=>"images/san-pham/vp003.jpg",
            'dcdsoluong'=>150,
            'dcddongia'=>250000,
            'dcdmaloai'=>1,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'vp004',
            'dcdtensanpham'  =>"cay van loc",
            'dcdhinhanh'=>"images/san-pham/vp004.jpg",
            'dcdsoluong'=>300,
            'dcddongia'=>799000,
            'dcdmaloai'=>1,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'pt001',
            'dcdtensanpham'  =>"cay thiet moc lan",
            'dcdhinhanh'=>"images/san-pham/pt001.jpg",
            'dcdsoluong'=>150,
            'dcddongia'=>590000,
            'dcdmaloai'=>3,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'pt002',
            'dcdtensanpham'  =>"cay truong sinh",
            'dcdhinhanh'=>"images/san-pham/pt002.jpg",
            'dcdsoluong'=>100,
            'dcddongia'=>150000,
            'dcdmaloai'=>3,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'pt003',
            'dcdtensanpham'  =>"cay hanh phuc",
            'dcdhinhanh'=>"images/san-pham/pt003.jpg",
            'dcdsoluong'=>200,
            'dcddongia'=>299000,
            'dcdmaloai'=>3,
            'dcdtrangthai'=>0
        ]);
        DB::table("dcd_sanpham")->insert([
            'dcdmasanpham'  => 'pt004',
            'dcdtensanpham'  =>"cay hoa nhai",
            'dcdhinhanh'=>"images/san-pham/pt004.jpg",
            'dcdsoluong'=>300,
            'dcddongia'=>199000,
            'dcdmaloai'=>3,
            'dcdtrangthai'=>0
        ]);
    }
}
