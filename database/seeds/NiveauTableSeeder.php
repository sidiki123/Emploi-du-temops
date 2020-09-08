<?php

use Illuminate\Database\Seeder;
use App\Niveau;

class NiveauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Niveau::class, 10)->create();
    }
}
