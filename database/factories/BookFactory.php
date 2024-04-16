<?php

namespace Database\Factories;
use App\Http\Models\Book;

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
            'ISBN'=>Int::random(13),
            'title'=>fake()->title(),
            'author'=>fake()->name(),
            'description'=>fake()->sentence(100),
            'date_published'=>fake()->date()
        ];
    }
}
