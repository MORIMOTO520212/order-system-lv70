<?php

declare(strict_types=1);

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

final class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'チョコレート'],
            ['name' => 'ガム'],
            ['name' => 'スナック'],
            ['name' => 'アイス'],
            ['name' => 'クッキー'],
            ['name' => 'せんべい'],
            ['name' => '珍味'],
        ];

        DB::table('categories')->insert($data);
    }
}
