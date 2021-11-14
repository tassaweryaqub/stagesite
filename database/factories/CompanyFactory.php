<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //TODO  in de factory kan je standaard waarde meegeven en anders gebruik maken van FAKER 
            'name' => $this->faker->name, 
            'details' =>$this->faker->text, 
            'stagestatus' => 'Nog niet bekend'

          

        ];
    }
}
