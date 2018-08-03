<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(ProfilecandidatesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TypeassessentsTableSeeder::class);
        $this->call(TypecontractsTableSeeder::class);
        $this->call(AssessmentsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CasestudiesTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(StacksTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        $this->call(RewardsTableSeeder::class);


    }
}
