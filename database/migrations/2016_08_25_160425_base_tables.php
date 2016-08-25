<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function(Blueprint $table)
        {
            $table->increments('id');
            //$table->integer('user_id')->unsigned();
            $table->string('name');
            $table->integer('level')->unsigned()->default(1);
            $table->enum('class', ['Barbarian', 'Bard', 'Druid', 'Monk', 'Paladin', 'Ranger', 'Sorcerer', 'Warlock']);
            $table->integer('max_hp')->unsigned()->default(10);
            $table->integer('max_mp')->unsigned()->default(10);
            $table->integer('current_hp')->unsigned()->default(10);
            $table->integer('current_mp')->unsigned()->default(10);
            $table->integer('str')->unsigned()->default(1);
            $table->integer('dex')->unsigned()->default(1);
            $table->integer('con')->unsigned()->default(1);
            $table->integer('int')->unsigned()->default(1);
            $table->integer('wis')->unsigned()->default(1);
            $table->integer('cha')->unsigned()->default(1);
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characters');
    }
}
