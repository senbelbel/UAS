<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i =1; $i <= 50; $i++){
            DB::table('mhs')->insert([
                'nim' => $faker->randomNumber(8),
                'nama' => $faker->name(),
                'gender' => $faker->randomElement(['Pria', 'Wanita']),
                'jurusan' => $faker->randomElement(['Sistem Informasi', 'Informatika', 'Kedokteran', 'Bioteknologi', 'Desain Produk']),
                'bid_minat' => $faker->randomElement(['Database', 'Olahraga', 'Public Speaking', 'Photography'])
                ]);
        }
    }
}
