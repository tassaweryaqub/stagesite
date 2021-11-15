<?php

namespace Database\Seeders;

use App\Models\Technic;
use Illuminate\Database\Seeder;

class TechnicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO aanroepen van de technic seeder om de factory te gebruiken 
       
        $technics = Technic::factory()->create([
            'name' => 'Laravel'
        ]); 
        $technics = Technic::factory()->create([
            'name' => 'React'
        ]); 

        $technics = Technic::factory()->create([
            'name' => 'Javascript'
        ]); 

        $technics = Technic::factory()->create([
            'name' => 'Python'
        ]); 


        Technic::factory()
        ->times(2)
        ->create();
    }
}
