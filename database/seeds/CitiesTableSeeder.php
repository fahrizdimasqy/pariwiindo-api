<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
         'province_id' => '12',
		 'city' => 'pelabuhanratu',
		 'type' => 'null',
		 'postal_code' => '43364'
 		]);
    }
}
