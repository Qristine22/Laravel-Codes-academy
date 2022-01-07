<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(SubheaderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(GoverningBoardPageSeeder::class);
        $this->call(GoverningBoardDecreeSeeder::class);
        $this->call(GoverningBoardStaffSeeder::class);
        $this->call(RectorsPageSeeder::class);
        $this->call(RectorsDecreeSeeder::class);
        $this->call(RectorsBiographySeeder::class);
        $this->call(FormerRectorsBiographySeeder::class);
    }
}
