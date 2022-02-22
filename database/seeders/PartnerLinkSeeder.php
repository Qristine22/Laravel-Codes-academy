<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners_links')->insert([
            [
                'name_en' => 'www.coe.int',
                'name_am' => 'www.coe.int',
                'name_ru' => 'www.coe.int',
                'link' => 'https://www.coe.int/en/web/portal/home',
                'partner_id' => 1,
            ],
        ]);
    }
}
