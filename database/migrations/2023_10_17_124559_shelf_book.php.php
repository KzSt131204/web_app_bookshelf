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
        Schema::create('shelf_book', function (Blueprint $table) {
        
        $table->foreignId('shelf_id')->constrained('shelves');   
        $table->foreignId('book_id')->constrained('shelves');    
        $table->primary(['shelf_id', 'book_id']);  
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
