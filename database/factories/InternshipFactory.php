<?php

namespace Database\Factories;

use App\Models\Internship;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
<<<<<<< HEAD
            'stagestatus' => $this->faker->name, 
=======
>>>>>>> 3de97244130c3762427669c9f0f8c75c86e6e3c3
        ];
    }
}
