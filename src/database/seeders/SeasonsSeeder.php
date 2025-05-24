<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Season;
use App\Models\Product;

class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $seasonData = [
        '秋' => ['キウイ', 'シャインマスカット', 'ブドウ'],
        '春' => ['ストロベリー', 'パイナップル', 'メロン'],
        '冬' => ['キウイ', 'オレンジ'],
        '夏' => ['スイカ', 'ピーチ', 'シャインマスカット', 'パイナップル', 'ブドウ', 'バナナ', 'メロン'],
        ];

        foreach ($seasonData as $seasonName => $productNames) {
            // 季節を作成 or 取得
            $season = Season::firstOrCreate(['name' => $seasonName]);

            // 商品を名前で取得
            $products = Product::whereIn('name', $productNames)->get();

            // 多対多の中間テーブルに紐付け（既存を壊さず追加）
            $season->products()->syncWithoutDetaching($products);
        }
    }
}
