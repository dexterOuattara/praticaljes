<?php

use Illuminate\Database\Seeder;

class TypecontractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Typecontract::class, 8)->create();

    }
}
