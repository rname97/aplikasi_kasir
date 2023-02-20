<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;
use DB;
use Faker\Factory as Faker;
class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <=10; $x++){
            \DB::table('karyawans')->insert([
                'name' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
        //
    }
}
