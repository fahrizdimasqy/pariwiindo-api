<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
		 'name' => 'pantai',
		 'slug' => 'pantai-sumurtiga',
		 'image' => 'pantaisumurtiga.jpg',
		 'status' => 'PUBLISH',
		 'created_at' => Carbon\Carbon::now(),
 		]);
    }
}
