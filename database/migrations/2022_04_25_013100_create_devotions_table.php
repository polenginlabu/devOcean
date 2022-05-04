<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devotions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->string('book')->nullable();
            $table->string('chapter')->nullable();
            $table->string('verses')->nullable();
            $table->string('bible_verse')->nullable();
            $table->text('rhema')->nullable();  
            $table->text('reflection')->nullable();                
            $table->text('motivation')->nullable();      
            $table->text('application')->nullable();      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devotions');
    }
}
