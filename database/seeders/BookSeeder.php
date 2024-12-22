<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            $randomCategory = Category::all()->random();
            Book::create([
                'name' => $faker->sentence,
                'author' => $faker->name,
                'category' => $randomCategory->name,
                'year' => $faker->year,
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
