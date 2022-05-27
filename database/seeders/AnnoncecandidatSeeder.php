<?php

namespace Database\Seeders;

use App\Models\Annoncecandidat;
use App\Models\Candidat;
use App\Models\Secteur;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AnnoncecandidatSeeder extends Seeder
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
            Annoncecandidat::create([
                'titre_annonce'=>$faker->text(10),
                'description_annonce'=>$faker->paragraph(mt_rand(1, 2)),
                'profile_rechercher'=>$faker->text(10),
                'niveau_etude'=>$faker->randomElement(['BAC+2', 'BAC+3', 'BAC+5', 'Technicien', 'Qualifier']),
                'secteur_activite_candidat'=>Secteur::all('id')->random()->id,
                'id_candidat'=>Candidat::all('id')->random()->id,
                'tele_candidat'=>$faker->numerify('+212-'.'###-###-###')
                
            ]);
        }
    }
}
