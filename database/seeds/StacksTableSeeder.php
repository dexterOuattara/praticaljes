<?php

use Illuminate\Database\Seeder;

class StacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Stack::class, 2)->create();

    }
}
