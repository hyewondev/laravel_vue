<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Photographer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photographer_id' => Photographer::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'img' => $this->faker->imageUrl(640, 480),
            'featured' => $this->faker->boolean
        ];
    }
}
