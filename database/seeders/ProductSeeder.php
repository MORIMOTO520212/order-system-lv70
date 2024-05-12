<?php

declare(strict_types=1);

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

final class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            $data = [
                [
                    'name' => "サンプル商品{$i}",
                    'category_id' => random_int(1, 7),
                    'price' => random_int(10, 99) * 10,
                ],
            ];
            DB::table('products')->insert($data);
        }
    }
}
