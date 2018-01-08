<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomcardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('custom_cards',function (Blueprint $table){
        $table->increments('id');
        $table->timestamps();
        $table->string('name');
        $table->string('manacost');
        $table->string('supertype');
        $table->string('type');
        $table->int('power');
        $table->int('toughness');
        $table->text('abilities');
        $table->text('flavortext');
        $table->text('imagepath');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('custom_cards');
    }
}
