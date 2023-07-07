<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('user');
            $table->text('description')->nullable();
            $table->integer('user_id');
//            $table->string('file_path')->nullable();
//            $table->tinyInteger('trending')->default('0')->comment('1=trending, 0=not-trending');
//            $table->integer('category_id');
//            $table->integer('episode_id');
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
        Schema::dropIfExists('podcasts');
    }
}
