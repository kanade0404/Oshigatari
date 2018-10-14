<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostIdAndUserIdFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favorites', function (Blueprint $table)
        {
            // お気に入りされた投稿ID
            $table->integer('post_id')->unsigned();
            // お気に入りしたユーザー
            $table->integer('user_id')->unsigned();
            $table->foreign('post_id')->references('id')
                ->on('posts');
            $table->foreign('user_id')->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favorites', function (Blueprint $table){
            $table->dropForeign('favorites_post_id_foreign');
            $table->dropForeign('favorites_user_id_foreign');
        });
    }
}
