<?php

use Illuminate\Database\Seeder;

class CasestudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Casestudy::class, 4)->create();

    }
}
