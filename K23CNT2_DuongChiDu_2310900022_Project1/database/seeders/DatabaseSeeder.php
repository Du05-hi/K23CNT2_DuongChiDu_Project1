<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            dcd_quantriTableSeeder::class,
            dcd_loaisanphamTableSeeder::class,
            dcd_sanphamTableSeeder::class 
        ]);


        DB::table('dcd_quantri')->insert([
            'email' => 'duongchiduj@gmail.com',
            'password' => Hash::make('123456a@'),
        ]);

    }
}
