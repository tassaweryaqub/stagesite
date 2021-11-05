<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Internship;
=======
>>>>>>> 3de97244130c3762427669c9f0f8c75c86e6e3c3
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
<<<<<<< HEAD
        $status = Internship::factory()->create([
            'stagestatus' => 'Zoek Stagiare',

        ]); 
        
        $status = Internship::factory()->create([
            'stagestatus' =>  'Zoekt geen Stagiare', 
        ]); 


        // Internship::factory()
        // ->times(5)
        // ->create();

=======
>>>>>>> 3de97244130c3762427669c9f0f8c75c86e6e3c3
    }
}
