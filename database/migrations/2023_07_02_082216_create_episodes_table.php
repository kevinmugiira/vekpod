<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image', 2048)->nullable();
            $table->text('description')->nullable();
            $table->string('podcast_name')->nullable();
            $table->string('category_id');
            $table->string('author');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
//            $table->string('slug');
//            $table->integer('status')->default('0');
//            $table->foreignId('category_id');
            $table->string('file_path')->nullable();
            $table->tinyInteger('trending')->default('1')->comment('1=trending, 0=not-trending');
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
        Schema::dropIfExists('episodes');
    }
}
