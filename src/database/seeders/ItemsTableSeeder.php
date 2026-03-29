<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => '腕時計',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'image' => 'item-img/Armani+Mens+Clock.jpg',
                'price' => '15000',
                'brand' => 'Rolax',
                'condition' => '良好'
            ],
            [
                'name' => 'HDD',
                'description' => '高速で信頼性の高いハードディスク',
                'image' => 'item-img/HDD+Hard+Disk.jpg',
                'price' => '5000',
                'brand' => '西芝',
                'condition' => '目立った傷や汚れなし'
            ],
            [
                'name' => '玉ねぎ3束',
                'description' => '新鮮な玉ねぎ3束のセット',
                'image' => 'item-img/iLoveIMG+d.jpg',
                'price' => '300',
                'brand' => 'なし',
                'condition' => 'やや傷や汚れあり'
            ],
            [
                'name' => '革靴',
                'description' => 'クラシックなデザインの革靴',
                'image' => 'item-img/Leather+Shoes+Product+Photo.jpg',
                'price' => '4000',
                'brand' => '',
                'condition' => '状態が悪い'
            ],
            [
                'name' => 'ノートPC',
                'description' => '高性能なノートパソコン',
                'image' => 'item-img/Living+Room+Laptop.jpg',
                'price' => '45000',
                'brand' => '',
                'condition' => '良好'
            ],
            [
                'name' => 'マイク',
                'description' => '高音質のレコーディング用マイク',
                'image' => 'item-img/Music+Mic+4632231.jpg',
                'price' => '8000',
                'brand' => 'なし',
                'condition' => '目立った傷や汚れなし'
            ],
            [
                'name' => 'ショルダーバッグ',
                'description' => 'おしゃれなショルダーバッグ',
                'image' => 'item-img/Purse+fashion+pocket.jpg',
                'price' => '3500',
                'brand' => '',
                'condition' => 'やや傷や汚れあり'
            ],
            [
                'name' => 'タンブラー',
                'description' => '使いやすいタンブラー',
                'image' => 'item-img/Tumbler+souvenir.jpg',
                'price' => '500',
                'brand' => 'なし',
                'condition' => '状態が悪い'
            ],
            [
                'name' => 'コーヒーミル',
                'description' => '手動のコーヒーミル',
                'image' => 'item-img/Waitress+with+Coffee+Grinder.jpg',
                'price' => '4000',
                'brand' => 'Starbacks',
                'condition' => '良好'
            ],
            [
                'name' => 'メイクセット',
                'description' => '便利なメイクアップセット',
                'image' => 'item-img/外出メイクアップセット.jpg',
                'price' => '2500',
                'brand' => '',
                'condition' => '目立った傷や汚れなし'
            ]
        ]);
    }
}
