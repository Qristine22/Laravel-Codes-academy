<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_staff')->insert([
            [
                'possition_en' => 'Rector',
                'possition_am' => 'Ռեկտոր',
                'possition_ru' => 'Ректор',
                'name_en' => 'Sergey Arakelyan',
                'name_am' => 'Սերգեյ Առաքելյան',
                'name_ru' => 'Сергей Аракелян',
                'phone' => '060 46 00 87',
                'mail' => 'rector@justiceacademy.am',
            ],
            [
                'possition_en' => 'Reception',
                'possition_am' => 'Ռեկտորի ընդունարան',
                'possition_ru' => 'Приемная ректора',
                'name_en' => 'Anahit Margaryan (Assistant to the Rector - Secretary to the Governing Board)',
                'name_am' => 'Անահիտ Մարգարյան (ռեկտորի օգնական - Կառավարման խորհրդի քարտուղար)',
                'name_ru' => 'Анаит Маргарян (помощник ректора - Секретарь Совета правления)',
                'phone' => '060 46 00 87',
                'mail' => 'anahit.margaryan@justiceacademy.am',
            ],
            [
                'possition_en' => 'Vice-rector',
                'possition_am' => 'Պրոռեկտոր',
                'possition_ru' => 'Проректор',
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'phone' => '060 46 00 77',
                'mail' => null,
            ],
            [
                'possition_en' => 'Chief of Staff',
                'possition_am' => 'Աշխատակազմի ղեկավար',
                'possition_ru' => 'Руководитель аппарата',
                'name_en' => 'Robert Shahinyan',
                'name_am' => 'Ռոբերտ Շահինյան',
                'name_ru' => 'Роберт Шагинян',
                'phone' => '060 46 00 89',
                'mail' => 'robert.shahinyan@justiceacademy.am',
            ],
            [
                'possition_en' => 'Head of the Unit of Finance-senior accountant',
                'possition_am' => 'Ֆինանսական բաժնի ղեկավար-գլխավոր հաշվապահ',
                'possition_ru' => 'Руководитель финансового отдела-главный бухгалтер',
                'name_en' => 'Narine Harutyunyan',
                'name_am' => 'Նարինե Հարությունյան',
                'name_ru' => 'Нарине Арутюнян',
                'phone' => '060 46 00 94',
                'mail' => 'narine.harutyunyan@justiceacademy.am',
            ],
            [
                'possition_en' => 'Advisor to the Rector',
                'possition_am' => 'Ռեկտորի խորհրդական',
                'possition_ru' => 'Советник ректора',
                'name_en' => 'Gevorg Israyelyan',
                'name_am' => 'Գևորգ Իսրայելյան',
                'name_ru' => 'Геворг Исраелян',
                'phone' => '060 46 00 84',
                'mail' => 'gevorg.israyelyan@justiceacademy.am',
            ],
        ]);
    }
}
