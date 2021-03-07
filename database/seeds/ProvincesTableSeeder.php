<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('provinces')->insert([
		 'province' => 'Jawa Barat',
 		],
 		[
		 'province' => 'Jawa Tengah',
 		],
 		[
		 'province' => 'Jawa Timur',
 		],
 	);
    }
}
