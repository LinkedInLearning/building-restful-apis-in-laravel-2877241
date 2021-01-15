<?php

namespace Database\Factories;

use App\Models\Petition;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Petition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'category' => $this->faker->text(50),
            'description' => $this->faker->text(200),
            'author' => $this->faker->name,
            'signees' => $this->faker->numberBetween(0, 1000000),
        ];
    }
}
