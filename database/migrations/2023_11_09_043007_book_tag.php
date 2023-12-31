<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('book_tag', function (Blueprint $table) {
        
        $table->foreignId('book_id')->constrained('books');   
        $table->foreignId('tag_id')->constrained('tags');    
        $table->primary(['book_id', 'tag_id']);  
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
