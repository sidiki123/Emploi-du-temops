<?php

use Illuminate\Database\Seeder;
use App\Dating;

class DatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dating::class, 10)->create();
    }
}
