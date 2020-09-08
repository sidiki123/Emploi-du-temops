<?php

use Illuminate\Database\Seeder;
use App\Matiere;

class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Matiere::class, 10)->create();
    }
}
