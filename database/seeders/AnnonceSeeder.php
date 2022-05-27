<?php

namespace Database\Seeders;

use App\Models\Annonce;
use App\Models\Secteur;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
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
            Annonce::create([
                'titre_annonce'=>$faker->text(10),
                'description_annonce'=>$faker->paragraph(mt_rand(1, 2)),
                'profile_rechercher'=>$faker->text(10),
                'niveau_etude'=>$faker->randomElement(['BAC+2', 'BAC+3', 'BAC+5', 'Technicien', 'Qualifier']),
                'secteur_id'=>Secteur::all('id')->random()->id,
                'contrat'=>$faker->randomElement(['CDD', 'CDT', 'Freelancer', 'A discutrt']),
                'salaire'=>$faker->randomElement([$faker->numerify('######.##'),'A discutrt']),
                
            ]);
        }
    }
}
