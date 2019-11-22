<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsVerificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_verification', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->bigInteger('id')->unsigned();
            $table->string('question');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('answer');

            $table->foreign('post_id')->references('id')->on('posts');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_verification');
    }
}
