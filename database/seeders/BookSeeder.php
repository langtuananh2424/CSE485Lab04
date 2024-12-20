<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            Book::create([
                'name' => $faker->sentence,
                'author' => $faker->name,
                'category' => $faker->randomElement(['Khoa học viễn tưởng', 'Lịch sử', 'Tiểu thuyết', 'Kinh doanh']),
                'year' => $faker->year,
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
