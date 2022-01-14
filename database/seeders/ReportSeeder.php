<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/6QTLaXMiuo9lKjJap3mSsuEDTb9LEm9T1qNhwTwQ.pdf',
                'year' => 2015,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/tIzUB7MKxDRlMbKfbhMTpY1KIIuCNIm0AvwEmpGQ.pdf',
                'year' => 2016,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/645XfRdovBXZQnhLvSH1o13fxtXDoaSMYvDQUaGn.pdf',
                'year' => 2016,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/E2xlGKVA6xDHdDm0s4dv6Xdsma1h9QGKE6B1uj82.pdf',
                'year' => 2017,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/iY4kThk56M4qI7QZp79rFA9LmTTDjcEFLt3LQHwV.pdf',
                'year' => 2017,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/Bvymue00yAvLmy6DNTNdFCKrhUxx7DdpOSSymIhF.pdf',
                'year' => 2018,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/4wo1zA1VL1mkpOTU9PtEnuqt3kSraUGzJ4UV5rH2.pdf',
                'year' => 2018,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/bIFxtISzwO59cKIPGh2ZTofwuvfLb4qxMDipmCTS.pdf',
                'year' => 2019,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/7Nq2IBztqMmWfFxWw1gZvqsFxiljoxYhsRRctsyk.pdf',
                'year' => 2019,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/Zqn0NzIQM7Z7JubX9MNqiyAWkVOfIzbKYgJn3You.pdf',
                'year' => 2020,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/RoIA69OLq06thkzHCIVdLJFb3JMXhh8vhw6UWeG3.pdf',
                'year' => 2020,
            ],
        ]);
    }
}
