<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => '全員公開',
            'description' => 'ユーザー以外を含めた全員に公開します。'
        ]);
        DB::table('permissions')->insert([
            'name' => 'オシガタリユーザーのみ',
            'description' => 'オシガタリユーザーのみに公開します。'
        ]);
        DB::table('permissions')->insert([
            'name' => 'クラスタのみ',
            'description' => '同じクラスタのみに公開します。'
        ]);
        DB::table('permissions')->insert([
            'name' => 'フレンドのみ',
            'description' => 'フレンドのみに公開します。'
        ]);
        DB::table('permissions')->insert([
            'name' => '下書き',
            'description' => '下書き状態で保存します。'
        ]);
    }
}
