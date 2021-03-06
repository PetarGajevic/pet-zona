<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'body' => $this->faker->paragraphs(rand(3,7),true),
            'image' => 'sea.png',
            'category_id' => random_int(\DB::table('categories')->min('id'), \DB::table('categories')->max('id'))
        ];
    }
}
