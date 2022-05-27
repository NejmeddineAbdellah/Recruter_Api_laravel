<?php

namespace Database\Seeders;

use App\Models\Recruteur;
use App\Models\Secteur;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RecruteurSeeder extends Seeder
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
            Recruteur::create([
                'username'=>$faker->text(10),
                'email'=>$faker->lexify('????'.'@gmail.com'),
                'password'=>$faker->password,
                'tele'=>$faker->numerify('+212-'.'###-###-###'),
                'ville'=>$faker->text(8),
                'logo'=>$faker->lexify('????'.'.jpg'),
                'secteur_id'=>Secteur::all('id')->random()->id,
            ]);
        }
    }
}
