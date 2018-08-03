<?php

use Illuminate\Database\Seeder;

class TypeassessentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Typeassessment::class, 5)->create();

    }
}
