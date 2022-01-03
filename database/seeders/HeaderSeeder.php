<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'name_en' => 'About Academy',
                'name_am' => 'Ակադեմիայի մասին',
                'name_ru' => 'Об Академии',
                'link' => 'http://justiceacademy.loc/about',
                'parent_id' => null,
            ],
            [
                'name_en' => 'Governing Board of the Academy',
                'name_am' => 'Ակադեմիայի կառավարման խորհուրդ',
                'name_ru' => 'Совет правления Академии',
                'link' => 'http://justiceacademy.loc/about/governing-board',
                'parent_id' => 1,
            ],
        ]);
    }
}
