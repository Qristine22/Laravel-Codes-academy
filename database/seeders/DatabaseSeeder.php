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
        $this->call(AcademyStructureSeeder::class);
        $this->call(WorkersSeeder::class);
        $this->call(WorkersImgsSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(GraduateSeeder::class);
        $this->call(AdmissionSeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(GalleryImgSeeder::class);
        $this->call(MassMediaSeeder::class);
        $this->call(MassMediaLinkSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(NewsImgSeeder::class);
    }
}
