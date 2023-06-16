<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
       
        $createMultipleUsers = [];
        for ($i = 0; $i < 10; $i++) {
        $createMultipleUsers[] = 
        ['holiday_date' => $faker->date,'holidays' => $faker->word,'created_at' => $faker->date,'updated_at' => $faker->date];
        }
        DB::table('holidays')->insert($createMultipleUsers);
    }
}
