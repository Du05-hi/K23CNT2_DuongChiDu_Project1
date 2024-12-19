<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dcd_loaisanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dcd_loaisanspham')->insert([
            'dcdmaloai'=>"L001",
            'dcdtenloai'=>"cay canh van phong",
            'dcdtrangthai'=>0
        ]);
        DB::table('dcd_loaisanspham')->insert([
            'dcdmaloai'=>"L002",
            'dcdtenloai'=>"cay de ban",
            'dcdtrangthai'=>0
        ]);
         DB::table('dcd_loaisanspham')->insert([
        'dcdmaloai'=>"L003",
        'dcdtenloai'=>"cay canh phong thuy",
        'dcdtrangthai'=>0
        ]);
    DB::table('dcd_loaisanspham')->insert([
        'dcdmaloai'=>"L004",
        'dcdtenloai'=>"cay thuy canh",
        'dcdtrangthai'=>0
        ]);
}
}
    

