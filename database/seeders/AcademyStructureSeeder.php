<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademyStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academy_structures')->insert([
            [
                'name_en' => 'GOVERNING BOARD',
                'name_am' => 'ԿԱՌԱՎԱՐՄԱՆ ԽՈՐՀՈՒՐԴ',
                'name_ru' => 'СОВЕТ ПРАВЛЕНИЯ',
                'link' => 'about/governing-board',
            ],
            [
                'name_en' => '<p>RECTOR</p>',
                'name_am' => '<p>ՌԵԿՏՈՐ</p>',
                'name_ru' => '<p>РЕКТОР</p>',
                'link' => 'about/rector',
            ],
            [
                'name_en' => '<p>RECTOR\'S</p><p>ADVISOR</p>',
                'name_am' => '<p>ՌԵԿՏՈՐԻ</p><p>ԽՈՐՀՐԴԱԿԱՆ</p>',
                'name_ru' => '<p>СОВЕТНИК</p><p>РЕКТОРА</p>',
                'link' => null,
            ],
            [
                'name_en' => '<p>VICE - RECTOR</p>',
                'name_am' => '<p>ՊՐՈՌԵԿՏՈՐ</p>',
                'name_ru' => '<p>ПРОРЕКТОР</p>',
                'link' => 'about/academy-structure/vice-rector',
            ],
            [
                'name_en' => '<p>CHIEF OF</p><p>STAFF</p>',
                'name_am' => '<p>ԱՇԽԱՏԱԿԱԶՄԻ</p><p>ՂԵԿԱՎԱՐ</p>',
                'name_ru' => '<p>РУКОВОДИТЕЛЬ</p><p>АППАРАТА</p>',
                'link' => 'about/academy-structure/chief-of-staff',
            ],
            [
                'name_en' => '<p>DEPARTMENT OF DISTANCE</p><p>LEARNING AND IT</p>',
                'name_am' => '<p>ՀԵՌԱՈՒՍՈՒՑՄԱՆ ԵՎ</p><p>ՏՏ ԴԵՊԱՐՏԱՄԵՆՏ</p>',
                'name_ru' => '<p>ДЕПАРТАМЕНТ ДИСТАН-</p><p>ЦИОННОГО ОБУЧЕНИЯ И ИТ</p>',
                'link' => 'about/academy-structure/distance-learning',
            ],
        ]);
    }
}
