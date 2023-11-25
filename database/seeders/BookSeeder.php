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
                'title' => 'ワンピース(1)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
        DB::table('books')->insert([
                'title' => 'ワンピース(2)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
        DB::table('books')->insert([
                'title' => 'ワンピース(3)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
        DB::table('books')->insert([
                'title' => 'ワンピース(4)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
        DB::table('books')->insert([
                'title' => 'ワンピース(5)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
        DB::table('books')->insert([
                'title' => 'ワンピース(6)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
        DB::table('books')->insert([
                'title' => 'ワンピース(7)',
                'author' => '尾田栄一郎',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
        
        ]);
        
         DB::table('books')->insert([
                'title' => '人間失格',
                'author' => '太宰治',
                'publisher' => '角川文庫',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => 'はらぺこあおむし',
                'author' => 'レイック=カール',
                'publisher' => '偕成社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        DB::table('books')->insert([
                'title' => 'ボボボーボ・ボーボボ(1)',
                'author' => '澤井啓夫',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => 'ボボボーボ・ボーボボ(2)',
                'author' => '澤井啓夫',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => 'ボボボーボ・ボーボボ(3)',
                'author' => '澤井啓夫',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                                                
        DB::table('books')->insert([
                'title' => '真説ボボボーボ・ボーボボ(1)',
                'author' => '澤井啓夫',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => '魔人探偵脳嚙ネウロ(1)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
 
         DB::table('books')->insert([
                'title' => '魔人探偵脳嚙ネウロ(2)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);
                
        DB::table('books')->insert([
                'title' => '魔人探偵脳嚙ネウロ(3)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);                
                
        DB::table('books')->insert([
                'title' => '暗殺教室(1)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);    
                
        DB::table('books')->insert([
                'title' => '暗殺教室(2)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);           
                
        DB::table('books')->insert([
                'title' => '暗殺教室(3)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);                   

        DB::table('books')->insert([
                'title' => '暗殺教室(4)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);                   
                
        DB::table('books')->insert([
                'title' => '逃げ上手の若君(1)',
                'author' => '松井優征',
                'publisher' => '集英社',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ]);                    
    }
}
