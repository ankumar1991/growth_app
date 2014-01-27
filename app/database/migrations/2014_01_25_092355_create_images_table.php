<?php

use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function ($table) {

            $table->increments('id');
            $table->string('path');
            $table->integer('user_id')->unsigned();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("images", function ($table) {
            $table->drop("images_user_id");
        });
        Schema::drop('images');
    }

}