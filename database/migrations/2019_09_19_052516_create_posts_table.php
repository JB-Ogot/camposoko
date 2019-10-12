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
            $table->string('user_id');
            $table->string('category');
            $table->string('pname');
            $table->string('condition')->nullable();
            $table->string('negotiable');
            $table->mediumText('shortDesc');
            $table->string('price')->nullable();
            $table->string('number');
            $table->mediumText('details')->nullable();
            $table->string('location')->nullable();
            $table->string('imgUrl1')->nullable();
            //$table->string('imgUrl2')->nullable();
            //$table->string('imgUrl3')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
