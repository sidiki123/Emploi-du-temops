<?php

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
        $this->call(NiveauTableSeeder::class);
        $this->call(ProfesseurTableSeeder::class);
        $this->call(DatingTableSeeder::class);
        $this->call(HoraireTableSeeder::class);
        $this->call(MatiereTableSeeder::class);
        $this->call(EtudiantTableSeeder::class);
    }
}
