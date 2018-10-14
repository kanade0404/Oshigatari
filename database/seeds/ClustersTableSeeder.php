<?php

use Illuminate\Database\Seeder;

class ClustersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clusters')->insert([
            'name' => 'ゆずソフト',
            'description' => '株式会社ユノスの大手美少女ゲームブランド"ゆずソフト"\n代表作：ぶらばん！、天神乱漫、RIDDLE JOKERなど'
        ]);
        DB::table('clusters')->insert([
            'name' => 'きんいろモザイク',
            'description' => '原悠衣による「まんがタイムきららMAX」で連載されている4コマ漫画作品'
        ]);
    }
}
