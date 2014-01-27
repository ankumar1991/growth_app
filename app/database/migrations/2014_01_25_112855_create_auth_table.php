<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth', function ($table) {

            $table->increments('id');
            $table->string('username');
            $table->string('password');
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
        Schema::drop('auth');
    }

}