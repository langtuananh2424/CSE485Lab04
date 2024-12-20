<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Borrow;
use App\Models\Book;
use App\Models\Reader;
class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $book = Book::all();
        $reader = Reader::all();
        foreach (range(1, 100) as $index) {
            Borrow::create([
                'book_id' => $book->random()->id,
                'reader_id' => $reader->random()->id,
                'borrow_date' => $faker->date(),
                'return_date' => $faker->date(),
                'status' => $faker->boolean(50),
            ]);
        }
    }
}
