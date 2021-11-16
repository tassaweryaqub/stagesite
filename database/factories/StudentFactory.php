<?php

namespace Database\Factories;

use App\Models\Company;

use App\Models\School;
use App\Models\Student;
use App\Models\Technic;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'name' => $this->faker->name, 
            'review' => 'De review van student', 
            'rating' =>$this->faker->randomNumber(1), 
            'company_id' => Company::all()->random()->id,
            'technic_id' => Technic::all()->random()->id,
            'school_id' => School::all()->random()->id, 

     



        ];
    }
}
