<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $schoolname = School::factory()->create([
            'name' => 'Zadkine'
        ]); 

        $schoolname = School::factory()->create([
            'name' => 'Albeda'
        ]); 

        
        $educationname = School::factory()->create([
            'educationname' => 'Software Developer'
        ]); 

        $educationname = School::factory()->create([
            'educationname' => 'ICT Beheerder'
        ]); 

        $groupname = School::factory()->create([
            'groupname' => 'APM2A'
        ]); 

        $groupname = School::factory()->create([
            'groupname' => 'APM2B'
        ]); 



    }
}
