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
                'name' => 'chocolate',
                'price' => '100'
            ],
            [
                'name' => 'kiritanpo',
                'price' => '200'
            ],
            [
                'name' => 'tea',
                'price' => '150'
            ]
        ]);
    }
}
