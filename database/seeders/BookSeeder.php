<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('books')->insert([
                'title' => 'タイトルA',
                'auther' => 'test1',
                'publisher' => 'testa',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
         DB::table('books')->insert([
                'title' => 'タイトルB',
                'auther' => 'test2',
                'publisher' => 'testb',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => 'タイトルC',
                'auther' => 'test3',
                'publisher' => 'testc',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
             DB::table('books')->insert([
                'title' => 'テストD',
                'auther' => 'test4',
                'publisher' => 'testd',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
    }
}
