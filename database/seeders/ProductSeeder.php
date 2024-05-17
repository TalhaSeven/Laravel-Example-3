<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table("products")->insert([
                'title'=> Str::random(75),
                'description'=> Str::random(100),
                'status'=>1,
                'amount'=> $i,
                'date_time'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}
