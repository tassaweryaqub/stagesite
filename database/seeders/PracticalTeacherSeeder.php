<?php

namespace Database\Seeders;

use App\Models\Practicalteacher;
use Illuminate\Database\Seeder;

class PracticalteacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Practicalteacher::factory()
        ->times(5)
        ->create();
    }
}
