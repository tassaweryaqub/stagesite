<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $stagestatus = Company::factory()->create([
            'stagestatus' => 'Zoekt Stagiaire'
        ]); 

        $stagestatus = Company::factory()->create([
            'stagestatus' => 'Geen Stageplaats Meer'
        ]); 

        $stagestatus = Company::factory()->create([
            'stagestatus' => 'Zoekt Stagiaire'
        ]); 

        $stagestatus = Company::factory()->create([
            'stagestatus' => 'Geen Stageplaats Meer'
        ]); 

        //
        Company::factory()
        ->times(2)
        ->create();

    }
}
