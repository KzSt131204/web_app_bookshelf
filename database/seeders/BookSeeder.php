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
                'title' => 'テスト',
                'auther' => 'test',
                'publisher' => 'test1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
         DB::table('books')->insert([
                'title' => 'テスト2',
                'auther' => 'testb',
                'publisher' => 'test2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => 'テスト3',
                'auther' => 'testc',
                'publisher' => 'test3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
             DB::table('books')->insert([
                'title' => 'テスト4',
                'auther' => 'testd',
                'publisher' => 'test4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
    }
}
