<?php

use Illuminate\Database\Seeder;

class ProfilecandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Profilecandidate::class, 5)->create();

    }
}
