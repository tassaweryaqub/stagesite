<?php

namespace Database\Seeders;

use App\Models\Internship;
use Illuminate\Database\Seeder;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = Internship::factory()->create([
            'stagestatus' => 'Zoek Stagiare',

        ]); 
        
        $status = Internship::factory()->create([
            'stagestatus' =>  'Zoekt geen Stagiare', 
        ]); 


        // Internship::factory()
        // ->times(5)
        // ->create();

    }
}
