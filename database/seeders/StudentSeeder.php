<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = Student::factory()->create([
            'name' => 'Samia'
        ]); 
        $students = Student::factory()->create([
            'name' => 'Tassawer'
        ]); 
        $students = Student::factory()->create([
            'name' => 'Dave'
        ]); 

        $students = Student::factory()->create([
            'name' => 'Jandino'
        ]);


        //TODO eerst worden de bovenstaande studenten d.m.v de factory gebruikt en daarna worden twee aangemaakt 

        Student::factory()
        ->times(2)
        ->create();


    }
}
