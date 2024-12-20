<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Reader;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            Reader::create([
                'name' => $faker->name,
                'birthday' => $faker->date(),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
