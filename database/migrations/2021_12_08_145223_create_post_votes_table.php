<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
                $table->foreign('type_id')
                    ->references('id')
                    ->on('vote_types')
                    ->cascade('delete');
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascade('delete');
            $table->unsignedBigInteger('post_id');
                $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->cascade('delete');
            $table->softDeletes();
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
        Schema::dropIfExists('post_votes');
    }
}


