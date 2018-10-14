<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdBelongToClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('belong_to_clusters', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('cluster_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('cluster_id')
                ->references('id')->on('clusters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('belong_to_clusters', function (Blueprint $table) {
            $table->dropForeign('belong_to_clusters_user_id_foreign');
            $table->dropForeign('belong_to_clusters_cluster_id_foreign');
        });
    }
}
