<?php

use Illuminate\Database\Seeder;
use App\Horaire;

class HoraireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Horaire::class, 10)->create();
    }
}
