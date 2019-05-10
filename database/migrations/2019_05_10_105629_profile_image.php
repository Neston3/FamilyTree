<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_image',function (Blueprint $table){
           $table->bigIncrements('image_id');
           $table->bigInteger('user_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->string('image');
           $table->string('occupation');
           $table->string('facebook');
           $table->string('instagram');
           $table->string('twitter');
           $table->string('linkedin');
           $table->string('pinterest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_image');
    }
}
