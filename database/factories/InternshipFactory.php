<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Internship;
use App\Models\Practicalteacher;
use App\Models\Student;
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
            'student_id' => Student::all()->random()->id,
            'company_id' => Company::all()->random()->id,
            'practicalteacher_id' => Practicalteacher::all()->random()->id, 
     
 
         

        ];
    }
}
