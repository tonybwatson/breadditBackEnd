<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
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
            $table->unsignedBigInteger('parent_id')->nullable();
                $table->foreign('parent_id')
                ->references('id')
                ->on('comments')
                ->cascade('delete')
                ->nullable();
            $table->text('content');
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
        Schema::dropIfExists('comments');
    }
}
