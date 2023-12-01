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
        Schema::create('book_shelf', function (Blueprint $table) {
        
        $table->foreignId('book_id')->constrained('books');   
        $table->foreignId('shelf_id')->constrained('shelves');    
        $table->unique(['book_id', 'shelf_id']);  
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
