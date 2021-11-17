<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Internship;
use App\Models\Practicalteacher;
use App\Models\Student;
use Carbon\Carbon;
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
            'company_id' => Company::all()->random()->id,
            'practicalteacher_id' => Practicalteacher::all()->random()->id, 
            'enddate' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('now', '+30 days')->getTimestamp()),
            'begindate' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('now', '+0 days')->getTimestamp()),
     
 
         

        ];
    }
}
