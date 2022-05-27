<?php

namespace Database\Seeders;

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
        $this->call(Secteurseeder::class);
        $this->call(Recruteurseeder::class);
        $this->call(Annonceseeder::class);
        $this->call(CandidatSeeder::class);
        $this->call(AnnoncecandidatSeeder::class);
        $this->call(DemandeSeeder::class);
        
    }
}
