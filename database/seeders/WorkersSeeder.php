<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            [
                'name_en' => 'Ashot Hayrapetyan',
                'name_am' => 'Աշոտ Հայրապետյան',
                'name_ru' => 'Ашот Айрапетян',
                'position_en' => 'Vice-rector of the Academy of Justice',
                'position_am' => 'Արդարադատության ակադեմիայի պրոռեկտոր',
                'position_ru' => 'Проректор Академии юстиции',
                'biography_en' => '<p>erg</p>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1973 թ., ապրիլ 29, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1998-2000 թթ.</p>
                <p>ԵՊՀ միջազգային հարաբերությունների ֆակուլտետի մագիստրատուրա</p>
                </li>
                <li>
                <p>1989-1994 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Գիտական աստիճան, կոչում</strong></p>
                <h4>Իրավաբանական գիտությունների թեկնածու, դոցենտ</h4>
                </div>
                <div>
                <h4><strong>Աշխատանքային գործունեություն</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 թ.-ի օգոստոսից</p>
                <p>Արդարադատության ակադեմիայի պրոռեկտոր</p>
                </li>
                <li>
                <p>2020 թ.-ի մարտից</p>
                <p>ԵԽ &laquo;ՀՀ բանտերում առողջապահության և մարդու իրավունքների պաշտպանության բարելավում&raquo; ծրագրի իրավական փորձագետ</p>
                </li>
                <li>
                <p>2019 թ.-ից</p>
                <p>Անչափահասների արդարադատության խորհրդի նախագահի տեղակալ</p>
                </li>
                <li>
                <p>2019 թ.-ի փետրվար-օգոստոս</p>
                <p>ԵՊՀ միջազգային հարաբերությունների ֆակուլտետի քաղաքական գիտության պատմության և տեսության ամբիոնի դոցենտ</p>
                </li>
                <li>
                <p>2016-2021 թթ.</p>
                <p>&laquo;Իրավական կրթության և վերականգնողական ծրագրերի իրականացման կենտրոն&raquo; ՊՈԱԿ-ի տնօրեն</p>
                </li>
                <li>
                <p>2004-2016 թթ.</p>
                <p>&laquo;ՀՀ արդարադատության նախարարության իրավաբանական ինստիտուտ&raquo; ՊՈԱԿ-ի տնօրեն</p>
                </li>
                <li>
                <p>2004 թ.-ի փետրվար-հունիս</p>
                <p>Հայ-ռուսական համալսարանի պետության և իրավունքի տեսության ամբիոնի ավագ դասախոս</p>
                </li>
                <li>
                <p>2000-2004 թթ.</p>
                <p>Հայաստանի գյուղատնտեսական ակադեմիայի իրավաբանության հիմունքների և արտադրության կառավարման ամբիոնի դասախոս</p>
                </li>
                <li>
                <p>1995-2000 թթ.</p>
                <p>ՀՀ նախագահի աշխատակազմի ներման, քաղաքացիության, պարգևների և կոչումների վարչության առաջատար մասնագետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>ՀՀ պետական կառավարման ակադեմիայի դոկտորանտ, դոկտորական ատենախոսության թեման՝ &laquo;ՀՀ միգրացիոն քաղաքականությունը. սահմանադրաիրավական կարգավորման տեսական և կիրառական հիմնախնդիրները&raquo;</h4>
                <h4>2021 թ.-ից ՀՀ ԳԱԱ Փիլիսոփայության, սոցիոլոգիայի և իրավունքի ինստիտուտի իրավագիտության 041 մասնագիտական խորհրդի անդամ</h4>
                <h4>2016-2019 թթ. ՀՀ պետական կառավարման ակադեմիայի իրավագիտության 041 մասնագիտական խորհրդի անդամ</h4>
                <h4>2012, 2013, 2015, 2016, 2017, 2021 թթ.-ին Գավառի պետական համալսարանի հումանիտար մասնագիտությունների իրավագիտության բաժնի ամփոփիչ ատեստավորման հանձնաժողովի նախագահ</h4>
                <h4>&laquo;Արդարադատություն&raquo; գիտական հանդեսի գլխավոր խմբագիր, &laquo;Ուկրաինայի պենիտենցիար ասոցացիայի սուրհանդակ&raquo; գիտական ամսագրի և &laquo;ՌԴ միջազգային քրեակատարողական ամսագիր&raquo; ցանցային գիտական հանդեսի խմբագրական խորհուրդների անդամ</h4>
                <h4>Հեղինակ է 3 տասնյակից ավելի գիտական հոդվածների, որոնցից մի քանիսը տպագրվել են միջազգային գիտական հանդեսներում, այդ թվում՝ Scopus և Web of Science միջազգային գիտական շտեմարանային ցանկերում, 2 մենագրության և 1 ուսումնական ձեռնարկի</h4>
                <h4>Զինապարտ, պահեստազորի լեյտենանտ</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուների իմացություն</strong></p>
                <h4>Ռուսերեն, անգլերեն</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան դրություն</strong></p>
                <h4>Ամուսնացած է, ունի մեկ դուստր և մեկ որդի</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата и место рождения</strong></p>
                <h4>29 апреля 1974 года, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1998-2000 гг.</p>
                <p>магистратура факультета Международных отношений Ереванского государственного университета</p>
                </li>
                <li>
                <p>1989-1994 гг.</p>
                <p>Юридический факультет Ереванского государственного университета</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Ученая степень, звание</strong></p>
                <h4>Кандидат юридических наук, доцент</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С августа 2021 г.</p>
                <p>по настоящее время проректор Академии юстиции</p>
                </li>
                <li>
                <p>С марта 2020 г.</p>
                <p>по настоящее время эксперт по правовым вопросам программы СЕ &laquo;Улучшение здравоохранения и защиты прав человека в тюрьмах РА&raquo;</p>
                </li>
                <li>
                <p>С 2019 г. по настоящее время</p>
                <p>заместитель председателя Совета юстиции по вопросам несовершеннолетних</p>
                </li>
                <li>
                <p>2019 г. февраль-август</p>
                <p>доцент кафедры истории и теории политической науки факультета международных отношений ЕГУ</p>
                </li>
                <li>
                <p>2016-2021 гг.</p>
                <p>директор &laquo;Центра правового образования и реализации реабилитационных программ&raquo; ГНКО</p>
                </li>
                <li>
                <p>2004-2016 гг.</p>
                <p>директор &laquo;Юридического института министерства юстиции РА&raquo; ГНКО</p>
                </li>
                <li>
                <p>2004 г. февраль-июнь</p>
                <p>старший преподаватель кафедры теории государства и права Армяно-Российского университета</p>
                </li>
                <li>
                <p>2000-2004 гг.</p>
                <p>преподаватель кафедры основы юриспруденции и управления производством Сельскохозяйственной академии Армении</p>
                </li>
                <li>
                <p>1995-2000 гг.</p>
                <p>ведущий специалист управления по вопросам помилований, гражданства, наград и званий аппарата президента РА</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иные сведения</strong></p>
                <h4>Докторант Академии государственного управления РА. Тема докторской диссертации &laquo;Миграционная политика РА: теоретические и практические проблемы конституционно-правового регулирования&raquo;</h4>
                <h4>С 2021 г. член юридического специализированного совета 041 института философии, социологии и права НАН РА</h4>
                <h4>2016-2019 гг. член юридического диссертационного совета 041 Академии государственного управления РА</h4>
                <h4>2012 г., 2013 г., 2015 г., 2016 г., 2017 г., 2021 г. председатель итоговой аттестационной комиссии юридического отдела гуманитарных профессий Гаварского государственного университета</h4>
                <h4>Главный редактор журнала &laquo;Юстиция&raquo;, член редакционного совета &laquo;Вестник пенитенциарной ассоциации Украины&raquo; и российского научного сетевого журнала &laquo;Международный пенитенциарный журнал РФ&raquo;</h4>
                <h4>Автор более трех десятков научных статей, некоторые из которых были опубликованы в международных научных журналах, в том числе в международных научных журналах Scopus и Web of Science, 2-х монографий и 1-го учебного пособия.</h4>
                <h4>Военнообязанный, лейтенант запаса</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>русский, английский</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Женат, имеет дочь и сына</h4>
                </div>',

                'img' => 'about/workers/FpalonBD6cqFBY0J6QN8DJUMj3HGTEaa7AkCl9Gd.png',
            ],
        ]);
    }
}
