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
                'author' => 'test1',
                'publisher' => 'testa',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
         DB::table('books')->insert([
                'title' => 'タイトルB',
                'author' => 'test2',
                'publisher' => 'testb',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => 'タイトルC',
                'author' => 'test3',
                'publisher' => 'testc',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
             DB::table('books')->insert([
                'title' => 'テストD',
                'author' => 'test4',
                'publisher' => 'testd',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
            DB::table('books')->insert([
                'title' => 'サンプル',
                'author' => 'サンプル1',
                'publisher' => 'サンプルA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
    }
}
