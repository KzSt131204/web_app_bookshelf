<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class ShelfSeeder extends Seeder
{
    
    public function run()
    {
         DB::table('shelves')->insert([
                'name' => 'テスト',
                'user_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
