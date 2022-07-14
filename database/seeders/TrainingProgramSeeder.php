<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_programs')->insert([
            [
                'name_en' => 'Training and special training program of judicial bailiffs',
                'name_am' => 'Դատական կարգադրիչների վերապատրաստման և հատուկ ուսուցման ծրագիր',
                'name_ru' => 'Программа переподготовки и специального обучения судебных приставов',
                'year' => 2017,
                'pdf' => 'full-time-education/training-program/DQ94J8J66vn6xPzlhCVKvtJzsNq4cW1W3gA1WMY8.pdf',
                'category' => 'judge',

                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է դատական կարգադրիչների 2017թ. վերապատրաստման և հատուկ ուսուցման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:</p>',
            ],
            [
                'name_en' => 'Training and special training program of judicial bailiffs',
                'name_am' => 'Դատական կարգադրիչների վերապատրաստման և հատուկ ուսուցման ծրագիր',
                'name_ru' => 'Программа переподготовки и специального обучения судебных приставов',
                'year' => 2018,
                'pdf' => 'full-time-education/training-program/aUm1rPIpdgzkT6BdC79LgqghqVEsCNOKvDlejNp6.pdf',
                'category' => 'judge',
                
                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է դատական կարգադրիչների 2018թ. վերապատրաստման և հատուկ ուսուցման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:</p>',
            ],
            [
                'name_en' => 'Training program of judicial servants',
                'name_am' => 'Դատական ծառայողների վերապատրաստման ուսուցման ծրագիր',
                'name_ru' => 'Программа переподготовки судебных служащих',
                'year' => 2019,
                'pdf' => 'full-time-education/training-program/KtEbb7uT7Ey5bRMYXSAWfbycYNpFFKIsqOThSn8Y.pdf',
                'category' => 'judge',
                
                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է դատական ծառայողների 2019թ. վերապատրաստման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:</p>',
            ],
            [
                'name_en' => 'Training program of judicial servants',
                'name_am' => 'Դատական ծառայողների վերապատրաստման ուսուցման ծրագիր',
                'name_ru' => 'Программа переподготовки судебных служащих',
                'year' => 2019,
                'pdf' => 'full-time-education/training-program/KtEbb7uT7Ey5bRMYXSAWfbycYNpFFKIsqOThSn8Y.pdf',
                'category' => 'judge',
                
                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է դատական ծառայողների 2019թ. վերապատրաստման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:</p>',
            ],
            [
                'name_en' => 'Training and special training program of judicial bailiffs',
                'name_am' => 'Դատական կարգադրիչների վերապատրաստման և հատուկ ուսուցման ծրագիր',
                'name_ru' => 'Учебная программа переподготовки и специального обучения судебных приставов',
                'year' => 2020,
                'pdf' => 'full-time-education/training-program/7nf9fhHAfMV9NxuHcSqef6rgNFEmzU3bQjWMksuh.pdf',
                'category' => 'judge',
                
                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է դատական կարգադրիչների 2020թ․ վերապատրաստման և հատուկ ուսուցման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագրերը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա։</p>',
            ],
            [
                'name_en' => 'Initial training program for persons included in the list of applicants for judge candidates with criminal specialization',
                'name_am' => 'Քրեական մասնագիտացմամբ դատավորների թեկնածուների հավակնորդների ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման ուսուցման ծրագիր',
                'name_ru' => 'Программа профессиональной подготовки лиц, включенных в список кандидатов на должности судей уголовной специализации',
                'year' => 2022,
                'pdf' => 'full-time-education/training-program/l9T3pRZVpHnuPRcGT11yw4aUI2ny8OV0SsOfd6wR.pdf',
                'category' => 'judge',
                
                'description' => '<p>Ուսուցման սույն ծրագիրը ներառում է դատավորների թեկնածուների հավակնորդների 2021-2022 թթ. ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, գնահատման եղանակը, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:</p>',
            ],
            [
                'name_en' => 'Training program of state servants in the staff of the Prosicutor\'s office',
                'name_am' => 'Դատախազության աշխատակազմում պետական ծառայողների վերապատրաստման ուսուցման ծրագիր',
                'name_ru' => 'Программа переподготовки государственных служащих аппарата прокуратуры',
                'year' => 2017,
                'pdf' => 'full-time-education/training-program/xdUYefE8xdAER3gG5EP0mxP5gMKg1PfwXhYddn2k.pdf',
                'category' => 'prosecutor',
                
                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է դատախազության աշխատակազմում պետական ծառայողների 2017թ. վերապատրաստման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ &laquo;Արդարադատության ակադեմիայի մասին&raquo; ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:</p>',
            ],
            [
                'name_en' => 'Special training program of investigators of Special Investigation Service of RA',
                'name_am' => 'ՀՀ հատուկ քննչական ծառայության քննիչների հատուկ ուսուցման ծրագիր',
                'name_ru' => 'Специальная программа обучения следователей Специальной следственной службы РА',
                'year' => 2018,
                'pdf' => 'full-time-education/training-program/0fe76YubCR7mv1kbVS4yPGWez5IceBQS54ebB33I.pdf',
                'category' => 'investigator',
                
                'description' => '<p>Սույն ուսուցման ծրագիրը ներառում է ՀՀ հատուկ քննչական ծառայության քննիչների հատուկ ուսուցման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսի համառոտ նկարագիրը։</p>
                <p>&nbsp;</p>
                <p>Ծրագիրը մշակվել է ՀՔԾ պետի` 2017 թվականի հոկտեմբերի 04-ի թիվ 20-Լ հրամանի հիման վրա:</p>',
            ],
        ]);
    }
}
