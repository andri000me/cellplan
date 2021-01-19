<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'		=> 'Rinso Besar',
            'price'		=> '12000',
            'category'	=> 'Sabun',
        ]);
        DB::table('products')->insert([
            'name'		=> 'Rinso Besar',
            'price'		=> '12000',
            'category'	=> 'Sabun',
        ]);
    }
}
