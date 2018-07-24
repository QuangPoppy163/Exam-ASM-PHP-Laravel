<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->delete();
        DB::table('flights')->insert([
            [
                'id'=>1,
                'name'=>'Tùng lợn',
                'category_id'=>1
            ]
        ]);
    }
}
