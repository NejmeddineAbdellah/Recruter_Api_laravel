<?php

namespace Database\Seeders;

use App\Models\Secteur;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        for ($i=0;$i<=9;$i++){
            Secteur::create([
                'titre_secteur'=>$faker->text(20),
            ]);
        }
    }
}
