<?php

use Illuminate\Database\Seeder;
use App\Emploitime;

class EmploitimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Emploitime::class, 10)->create();
    }
}
