<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tickets')->insert([
		 'title' => 'Pantai Sumurtiga',
		 'slug' => 'pantai-sumurtiga',
		 'selecteddate' => '2021-09-09',
		 'description' => 'Ranu Pani merupakan objek wisata berupa danau yang terletak di Desa Ranu Pani, Kecamatan Senduro, Kabupaten Lumajang, Jawa Timur. Ranu Pani termasuk ke dalam bagian dari Taman Nasional Bromo Tengger Semeru (TNBTS).',
		 'image' => 'ranupani.webp',
		 'price' => 50000,
		 'stock' => 10,
		 'status' => 'PUBLISH',
 		],
 		[
		 'title' => 'Mandalika',
		 'slug' => 'mandalika',
		 'selecteddate' => '2021-09-09',
		 'description' => 'Mandalika menawarkan wisata bahari dengan pesona pantai dan bawah laut yang memukau. Mandalika berasal dari nama seorang tokoh legenda, yaitu Putri Mandalika yang dikenal dengan parasnya yang cantik. Setiap tahunnya, masyarakat Lombok Tengah merayakan upacara Bau Nyale, yaitu ritual mencari cacing laut yang dipercaya sebagai jelmaan dari Putri Mandalika. Perayaan ini merupakan budaya yang unik dan menarik wisatawan baik lokal maupun internasional.',
		 'image' => 'mandalika.jpg',
		 'price' => 25000,
		 'stock' => 10,
		 'status' => 'PUBLISH',
 		],
 		[
		 'title' => 'Pantai Sumurtiga',
		 'slug' => 'pantai-sumurtiga',
		 'selecteddate' => '2021-09-09',
		 'description' => 'Jelajah destinasi wisata di Indonesia yang pertama kita mulai dari Kota Sabang, Daerah Istimewa Aceh. Tepatnya di Pantai Sumurtiga. Pantai ini memiliki pasir putih dengan daerah pesisir yang panjang.',
		 'image' => 'pantaisumurtiga.jpg',
		 'price' => 90000,
		 'stock' => 10,
		 'status' => 'PUBLISH',
 		],
 		[
		 'title' => 'Danau Toba',
		 'slug' => 'danau-toba',
		 'selecteddate' => '2021-09-09',
		 'description' => 'Danau yang terbentuk karena aktivitas gunung berapi ini disebut sebagai danau vulkanik paling cantik di Indonesia. Danau Toba berikut dengan pemandangan yang ada di sekitarnya, tampil sebagai salah satu primadona Sumatra Utara.',
		 'image' => 'danautoba.jpg',
		 'price' => 75000,
		 'stock' => 10,
		 'status' => 'PUBLISH',
 		],
	);
    }
}
