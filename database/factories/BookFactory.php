<?php

namespace Database\Factories;
use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'ISBN'=>fake()->isbn13(),
            'title'=>fake()->words(3),
            'author'=>fake()->name(),
            'description'=>fake()->sentence(5),
            'date_published'=>fake()->date()
        ];
    }
}
