<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Auhtor;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->words(4, true),
            'author_id' => $this->faker->randomNumber(1,5000),
            'title' => "qui",
            'description' => $this->faker->sentence(),
        ];

    //     $faker = Faker::create();

    //     foreach (range(1, 10) as $index) {
    //         Articles::create([
    //             'article_id' => $faker->randomNumber(),
    //             'title' => $faker->words(1,true),
    //             'description' => $faker->sentence(),
    //             // Other attributes...
    //         ]);


    // }
}
}
