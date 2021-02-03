<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['id' => 0,
            'name' => 'アクション',
                'sort_number' => 0,
            ],
            [
                'id' => 1,
                'name' => 'ホラー',
                'sort_number' => 1,
            ],
            [
                'id' => 2,
                'name' => 'ラブストーリー',
                'sort_number' => 2,
            ],
            [
                'id' => 3,
                'name' => 'コメディ',
                'sort_number' => 3,
            ],
            [
                'id' => 4,
                'name' => '歴史',
                'sort_number' => 4,
            ],
            [
                'id' => 5,
                'name' => 'ヒューマンドラマ',
                'sort_number' => 5,
            ],
            [
                'id' => 6,
                'name' => 'SF',
                'sort_number' => 6,
            ],
            [
                'id' => 7,
                'クラシック',
                'sort_number' => 7,
            ],
            [
                'id' => 8,
                'name' => '青春',
                'sort_number' => 8,
            ],
            [
                'id' => 9,
                'name' => 'ファンタジー',
                'sort_number' => 9,
            ],
            [
                'id' => 10,
                'name' => '家族',
                'sort_number' => 10,
            ],
            [
                'id' => 11,
                'name' => 'サスペンス',
                'sort_number' => 11,
            ]
        ];
        foreach ($genres as $genre) {
            DB::table('genres') ->insert($genre);
        }
        
    }
}
