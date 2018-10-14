<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFollowUserIdAndFollowedUserIdFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('friends', function (Blueprint $table)
        {
            // フォローユーザー
            $table->integer('follow_user_id')->unsigned();
            // 被フォローユーザー
            $table->integer('followed_user_id')->unsigned();
            $table->foreign('follow_user_id')->references('id')
                ->on('users');
            $table->foreign('followed_user_id')->references('id')
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
        Schema::table('friends', function (Blueprint $table){
            $table->dropForeign('friends_follow_user_id_foreign');
            $table->dropForeign('friends_followed_user_id_foreign');
        });
    }
}
