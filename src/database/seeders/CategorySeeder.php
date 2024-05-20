<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['content' => '商品について']);
        Category::create(['content' => '商品の交換について']);
        Category::create(['content' => '商品の返品について']);
        Category::create(['content' => 'サービスや商品に関するお問い合わせ']);
        Category::create(['content' => 'その他お問い合わせ']);
    }
}
