<?php

namespace Database\Seeders;

use App\Models\Practicalteacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            CompanySeeder::class, 
<<<<<<< HEAD
            TechnicSeeder::class, 
=======
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2
            StudentSeeder::class,  
            PracticalteacherSeeder::class,
            InternshipSeeder::class, 

     
 

      

        ]); 
    }
}
