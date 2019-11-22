<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('image');
            $table->string('type');
            $table->string('category');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->integer('date');
            $table->integer('month');
            $table->integer('year');
            $table->text('description');
            $table->string('color')->nullable();
            $table->string('model')->nullable();
            $table->string('contact_type');
            $table->string('contact');
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
