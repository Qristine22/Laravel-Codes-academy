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


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>29 April 1973, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1998-2000</p>
                <p>Yerevan State University, Master\'s degree at Faculty of International Relations</p>
                </li>
                <li>
                <p>1989-1994</p>
                <p>Yerevan State University, Faculty of Law</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Scientific degree, title</strong></p>
                <h4>Кандидат юридических наук, доцент</h4>
                </div>
                <div>
                <h4><strong>Work Experience</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>August 2021 up to now:</p>
                <p>Vice-rector of the Academy of Justice</p>
                </li>
                <li>
                <p>March 2020 up to now:</p>
                <p>Legal experts of the CoE program "Improving health care and protection of human rights in the prisons of the RA"</p>
                </li>
                <li>
                <p>2019 up to now:</p>
                <p>Deputy Chairman of the Council for Juvenile Justice</p>
                </li>
                <li>
                <p>2019 February-August:</p>
                <p>Associate Professor of Faculty of International Relations of the YSU, Chair of Theory and History of Political Science</p>
                </li>
                <li>
                <p>2016-2021:</p>
                <p>Director of the "Centre for the implementation of legal education and rehabilitation programmes" SNCO</p>
                </li>
                <li>
                <p>2004-2016:</p>
                <p>Director of "Law Institute of the Ministry of Justice of the RA" SNCO</p>
                </li>
                <li>
                <p>2004 February-June:</p>
                <p>Senior lecturer at the Chair of Theory of State and Law of the Armenian-Russian University</p>
                </li>
                <li>
                <p>2000-2004:</p>
                <p>Lecturer of the Armenian Agricultural Academy Department of Legal Basics and Industrial Management</p>
                </li>
                <li>
                <p>1995-2000:</p>
                <p>Leading specialist of the Department of amnesty, citizenship, awards and titles at the Staff of the President of the RA</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Other Information</strong></p>
                <h4>Doctoral Candidate at the Academy of Public Administration of the RA. The topic of the dissertation is &ldquo;Migration policy of the RA: theoretical and practical issues of the constitutional and legal regulation&rdquo;</h4>
                <h4>2021 up to now: Member of the Legal Specialized Council 041 of the Institute of Philosophy, Sociology and Law of the National Academy of Sciences of the RA</h4>
                <h4>2016-2019: Member of the Legal Dissertation Council 041 of the Academy of Public Administration of the RA</h4>
                <h4>2012, 2013, 2015, 2016, 2017, 2021: Chairman of the final attestation commission of the humanities specialties and law department of the Gavar State University</h4>
                <h4>Editor-in-Chief of the scientific journal "Justice", member of the editorial boards of "Messenger of the Ukrainian Penitentiary Association" scientific journal and the network scientific journal "International Penitentiary Journal of the RF&rdquo;</h4>
                <h4>Author of more than three dozen scientific articles, some of which have been published in international scientific journals, including the international databases Scopus and Web of Science, 2 monographs and 1 textbook.</h4>
                <h4>Liable for military service, reserve lieutenant</h4>
                </div>
                <div>
                <p><strong>Foreign Languages</strong></p>
                <h4>Russian, English</h4>
                </div>
                <div>
                <p><strong>Marital Status</strong></p>
                <h4>Married, have a daughter and a son</h4>
                </div>',


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

                'img' => 'about/workers/cZqvwk60yJSO3XMDA9QLbXVzBG6SdbOc7ZfPHJrk.jpg',
            ],



            // ************************************************************************************************
            [
                'name_en' => 'Robert H. Shahinyan',
                'name_am' => 'Ռոբերտ Շահինյան',
                'name_ru' => 'Роберт Овсепович Шагинян',
                'position_en' => 'Chief of Staff',
                'position_am' => 'Աշխատակազմի ղեկավար',
                'position_ru' => 'Начальник штаба',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>19.01.1979, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2004:</p>
                <p>Faculty of Law, Moscow State Pedagogical University</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Work experience</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>February 2017-present:</p>
                <p>Chief of Staff of the Academy of Justice</p>
                </li>
                <li>
                <p>November 2016 - February 2017:</p>
                <p>Head of the Department of the Full-Time Education of the Academy of Justice</p>
                </li>
                <li>
                <p>2014-2016:</p>
                <p>"Dominant Production" Consultant of negotiation and legal issues at the production of TV programs of Russian-Armenian company, Yerevan</p>
                </li>
                <li>
                <p>2013-2014:</p>
                <p>Executive Director of the "Arsmartsim" Russian-Armenian company in the field of telecommunication, Yerevan</p>
                </li>
                <li>
                <p>2006-2009:</p>
                <p>Director of the "Rosnor Hydro" Investment Company, Republic of Cyprus</p>
                </li>
                <li>
                <p>2006&ndash;2009:</p>
                <p>General Director of the "IMPEX POLARIS" Russian-Norwegian Energy Company, Moscow</p>
                </li>
                <li>
                <p>2005-2006:</p>
                <p>Legal consultant at the "Alliance Projects Construction Company՛՛ LLC, Moscow</p>
                </li>
                <li>
                <p>2005-2006:</p>
                <p>Legal consultant at the "IMPEX POLARIS" Russian-Norwegian Energy Company, Moscow</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Foreign Languages</strong></p>
                <h4>Russian, English, Ukrainian, Turkish</h4>
                </div>
                <div>
                <p><strong>Awards</strong></p>
                <h4>Golden Medal of the Academy of Justice of RA, On the occasion of the 5th anniversary of the foundation of the Academy of Justice of RA, Yerevan 2018 Letter of appreciation, Academy of Justice</h4>
                </div>
                <div>
                <p><strong>Other information</strong></p>
                <h4>Service in the Armed Forces of RA</h4>
                </div>
                <div>
                <p><strong>Marital Status</strong></p>
                <h4>Married, has two daughters</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>19.01.1979, ք․ Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2004 թ.</p>
                <p>Մոսկվայի մանկավարժական պետական համալսարանի իրավաբանական ֆակուլտետ</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Աշխատանքային փորձ</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ. փետրվարի 1-ից</p>
                <p>Արդարադատության ակադեմիայի աշխատակազմի ղեկավար</p>
                </li>
                <li>
                <p>2016 թ. նոյեմբերից-2017թ. փետրվար&nbsp;</p>
                <p>Արդարադատության ակադեմիայի առկա ուսուցման վարչության պետ</p>
                </li>
                <li>
                <p>2014-2016 թթ.</p>
                <p>&laquo;Դոմինանտ պրոդաքշն&raquo; հեռուստահաղորդումների արտադրանք իրականացնող ռուս-հայկական ընկերությունում բանակցային-իրավական հարցերով խորհրդատու, Երևան</p>
                </li>
                <li>
                <p>2013-2014 թթ.</p>
                <p>&laquo;Արսմարթսիմ&raquo; հեռահաղորդակցության ոլորտում աշխատող ռուս-հայկական կազմակերպության գործադիր տնօրեն, Երևան</p>
                </li>
                <li>
                <p>2006-2009 թթ.</p>
                <p>&laquo;Ռոսնոր հիդրո&raquo; ներդրումային կազմակերպության տնօրեն, Կիպրոսի Հանրապետություն</p>
                </li>
                <li>
                <p>2006-2009 թթ.</p>
                <p>&laquo;Իմպեքս Պոլյարիս&raquo; ռուս-նորվեգական էներգետիկ կազմակերպության գլխավոր տնօրեն, ՌԴ, Մոսկվա</p>
                </li>
                <li>
                <p>2005-2006 թթ.</p>
                <p>&laquo;Պրոյեկտնի Ալյանս շինարարական կազմակերպություն&raquo; ՍՊԸ-ում իրավախորհրդատու, ՌԴ, Մոսկվա</p>
                </li>
                <li>
                <p>2005-2006 թթ.</p>
                <p>&laquo;Իմպեքս Պոլյարիս&raquo; ռուս-նորվեգական էներգետիկ կազմակերպության իրավախորհրդատու, ՌԴ, Մոսկվա</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն, ուկրաիներեն, թուրքերեն</h4>
                </div>
                <div>
                <p><strong>Պարգևներ</strong></p>
                <h4>Ոսկե Մեդալ, Արդարադատության ակադեﬕայի հիﬓադրման 5-ամյակի կապակցությամբ, Արդարադատության ակադեմիա, Երևան, 2018 թ. Շնորհակալագիր, Արդարադատության ակադեմիա</h4>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>Ծառայել է ՀՀ զինված ուժերում</h4>
                </div>
                <div>
                <p><strong>Ընտանեկան կարգավիճակ</strong></p>
                <h4>Ամուսնացած է, ունի երկու դուստր</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата, место рождения</strong></p>
                <h4>19.01.1979, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2004 г.</p>
                <p>Юридический факультет Московского педагогического государственного университета</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Трудовая деятельность&nbsp;</strong></h4>
                </div>
                <div>
                <ul style="list-style-type: none;">
                <li>
                <p>С 1-го февраля 2017 г.</p>
                <p>руководитель аппарата Академии юстиции</p>
                </li>
                <li>
                <p>С ноября 2016 г. по февраль 2017 г.</p>
                <p>начальник управления очного обучения Академии юстиции</p>
                </li>
                <li>
                <p>2014-2016 гг.</p>
                <p>консультант по договорно-правовым вопросам ЗАО &laquo;Доминант Продакшн&raquo; (Российско-Армянская компания по производству телерадиопродукции), Ереван</p>
                </li>
                <li>
                <p>2013-2014 гг.</p>
                <p>Директор ООО &laquo;АрСмартСим&raquo; (Российско-Армянская компания мобильной связи), Ереван</p>
                </li>
                <li>
                <p>2006-2009 гг.</p>
                <p>Директор &laquo;ROSNOR HYDRO&raquo; (Инвестиционная компания), Республика Кипр</p>
                </li>
                <li>
                <p>2006-2009 гг.</p>
                <p>Генеральный директор OOO &laquo;ИМПЭКС ПОЛЯРИС&raquo; (ROSNOR) (Российско-Норвежская энергетическая компания), РФ, г. Москва</p>
                </li>
                <li>
                <p>2005-2006 гг.</p>
                <p>Юрисконсульт OOO &laquo;Строительная Компания &laquo;Проектный Альянс&raquo;&raquo; (проектирование, строительство гидротехнических сооружений), РФ, г. Москва</p>
                </li>
                <li>
                <p>2005-2006 гг.</p>
                <p>Юрисконсульт OOO &laquo;ИМПЭКС ПОЛЯРИС&raquo; (Российско-Норвежская энергетическая компания), РФ, г. Москва</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский, украинский, турецкий</h4>
                </div>
                <div>
                <p><strong>Награды</strong></p>
                <h4>Медаль Академии юстиции, Академия юстиции, Ереван, 2018 г. Благодарность Академии юстиции</h4>
                </div>
                <div>
                <p><strong>Иные сведения</strong></p>
                <h4>Служил в вооруженных силах РА</h4>
                </div>
                <div>
                <p><strong>Семейное положение</strong></p>
                <h4>Женат, имеет двух дочерей</h4>
                </div>',

                'img' => 'about/workers/C1PRxroKH49M7mwIrzcenST7DSMkOP6prqor8zpq.jpg',
            ],



            


            // ************************************************************************************************
            [
                'name_en' => 'Artashes Khurshudyan',
                'name_am' => 'Արտաշես Խուրշուդյան',
                'name_ru' => 'Арташес Хуршудян',
                'position_en' => 'Head of Distance Learning and IT Department',
                'position_am' => 'Հեռաուսուցման և ՏՏ դեպարտամենտի ղեկավար',
                'position_ru' => 'Руководитель департамента дистанционного обучения и информационных технологий',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth</strong></p>
                <h4>13.03.1979, Yerevan, Republic of Armenia</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2011 January &ndash; June:</p>
                <p>Certificate program, International law and Diplomacy: Fletcher school of Diplomacy and International law, Tufts University, Boston, US</p>
                </li>
                <li>
                <p>2005:</p>
                <p>PhD, Department of Sociology, Yerevan State University</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001:</p>
                <p>Master&rsquo;s Degree: Department of Sociology, Yerevan State University</p>
                </li>
                <li>
                <p>1999:</p>
                <p>Bachelor\'s Degree: Department of Sociology, Yerevan State University</p>
                </li>
                <li>
                <p>1995:</p>
                <p>Gold medal graduation. High school N 147</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Academic degree, title</strong></p>
                <h4>PhD in Social sciences</h4>
                </div>
                <div>
                <p><strong>Topic of the PHD thesis</strong></p>
                <h4>"Introduction issues and development trends of distance education systems in the Republic of Armenia", 013 Professional council, Yerevan, Republic of Armenia</h4>
                </div>
                <div>
                <p><strong>Professional experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 February - up to now:</p>
                <p>Head of Distance learning and IT department, Academy of Justice</p>
                </li>
                <li>
                <p>2014-2017:</p>
                <p>Head of Distance learning department, Academy of Justice</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2005 September &ndash; up to now:</p>
                <p>Head of distance learning laboratory, Department of Sociology, Yerevan State University</p>
                </li>
                <li>
                <p>2001 &ndash; 2003:</p>
                <p>Project co-ordinator, "Armenian distance learning network", Tempus Joint European Program</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Trainings</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2014 October- November:</p>
                <p>Certificate, &ldquo;Strengthening the application of the European Convention on Human Rightsand the case law of the European Court of Human Rights in Armenia&rdquo;, Human Rights and Rule of Law, Council of Europe</p>
                </li>
                <li>
                <p>2014 August:</p>
                <p>US consultations on Judicial Education, Publications and Distance learning Programs, Commercial Law Development Program, US.Department of Commerce, Washington, DC</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2006 Januart - February:</p>
                <p>Training program, Modern Electronic Programs in Distance Education: Middlesex University, London, United Kingdom</p>
                </li>
                <li>
                <p>2004:</p>
                <p>Dissertation research, Open University, United Kingdom</p>
                </li>
                <li>
                <p>2003 January:</p>
                <p>Training Program, Educational technologies and concepts: Open University, United Kingdom</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2002 February:</p>
                <p>Training Program, Educational technologies and concepts: Open University, United Kingdom</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Languages</strong></p>
                <h4>Russian, English, French</h4>
                </div>
                <div>
                <p><strong>Articles, e-learning courses and study units</strong></p>
                <h4>Author and co-author of 9 articles and study units, 10 distance learning courses and packages. Learning strategist and instructional designer of 6 English language distance learning courses. Learning strategist and instructional designer of 55 micro learning courses.</h4>
                </div>
                <div>
                <p><strong>Innovative digital learning solutions</strong></p>
                <h4>e-learning interactive courses, linear interactive videos (with option to localize and adapt informative programs into interactive video courses), user experience gamified interactive videos</h4>
                </div>
                <div>
                <p><strong>Awards and prizes</strong></p>
                <h4>Golden Medal of the Academy of Justice of RA, On the occasion of the 5th anniversary of the foundation of the Academy of Justice of RA, Yerevan 2018</h4>
                <h4>Medal of Nerses Shnorhali, For development of distance learning system at Academy of Justice, Ministry of Justice, Yerevan 2016</h4>
                <h4>Letter of Appreciation in the field of university training programs and 95 anniversary of establishment of Yerevan State University, Yerevan 2014</h4>
                <h4>Letter of Appreciation for Personal Contribution in the Establishment of Social Work Institute in the Republic of Armenia, Ministry of Labor and Social Affairs of the Republic of Armenia, Yerevan 2011</h4>
                <h4>Diploma for impeccable work and significant contribution in the development of YSU distance learning training programs, Yerevan State University, Yerevan 2009</h4>
                </div>
                <div>
                <p><strong>Department of Distance Learning and Information Technologies</strong></p>
                <h4>The department implements the annual training of judges and prosecutors in a format of distance learning. About 400 judges and prosecutors are trained annually through distance learning programs. In cooperation with foreign partners the Department has developed and implemented the following distance learning courses:</h4>
                <h4>time and stress management</h4>
                <h4>argumentation and rhetorics</h4>
                <h4>human resource management for legal professionals</h4>
                <h4>refugee law for Administrative Court judges</h4>
                <h4>protection of children&rsquo;s rights in a criminal procedure</h4>
                <h4>refugee law for Criminal Court judges and prosecutors</h4>
                <h4>The Department continuously develops and tests innovative digital learning solutions for judges and prosecutors using gamification techniques, micro learning approaches, digital statistical models, and scenario based learning techniques.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>13.03.1979 թ., ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2011 թ. հունվար-հունիս</p>
                <p>ԱՄՆ Թաֆթս համալսարանի Ֆլեթչերի իրավունքի և դիվանագիտության դպրոց</p>
                </li>
                <li>
                <p>2001-2004 թթ.</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի ասպիրանտուրա</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>1999-2001 թթ.</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի մագիստրատուրա</p>
                </li>
                <li>
                <p>1995 -1999 թթ.</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի բակալավրիատ</p>
                </li>
                <li>
                <p>1995 թթ.</p>
                <p>N 147 միջնակարգ դպրոց, Ավարտել է ոսկե մեդալով</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Գիտական աստիճան, կոչում</strong></p>
                <h4>Սոցիոլոգիական գիտությունների թեկնածու</h4>
                </div>
                <div>
                <p><strong>Ատենախոսության թեման</strong></p>
                <h4>&laquo;Հեռակրթության համակարգերի ներդրման հիմնախնդիրները և զարգացման միտումները ՀՀ-ում&raquo;</h4>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ. փետրվարի 1-ից</p>
                <p>Արդարադատության ակադեմիայի հեռաուսուցման և ՏՏ դեպարտամենտի ղեկավար</p>
                </li>
                <li>
                <p>2014-2017 թ.</p>
                <p>Արդարադատության ակադեմիայի հեռաուսուցման վարչության պետ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2005 թ.-ից սեպտեմբերից</p>
                <p>ԵՊՀ սոցիոլոգիայի ֆակուլտետի հեռաուսուցման լաբորատորիայի վարիչ</p>
                </li>
                <li>
                <p>2001 &ndash; 2003 թ.</p>
                <p>&laquo;Հայկակական հեռաուսուցման Ցանց&raquo; ծրագրի համակարգող, Տեմպուս Եվրոպական ծրագիր</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Վերապատրաստումներ</strong></p>
                <h4>Մասնակցել է բազմաթիվ մասնագիտական վերապատրաստումների Հայաստանում և արտերկրում</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, անգլերեն, ֆրանսերեն</h4>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>Հեղինակ և համահեղինակ է 9 ուսումնական ձեռնարկների և հոդվածների, 10 հեռաուսուցման դասընթացների և փաթեթների: 6 անգլիալեզու հեռաուոուցման դասընթացների մեթոդոլոգիայի մշակող: 55 միկրո ուսուցման դասընթացների մեթոդոլոգիայի մշակող և ուսուցման ռազմավարության հեղինակ:</h4>
                </div>
                <div>
                <p><strong>Պատվոգրեր և շնորհակալագրեր</strong></p>
                <h4>Ոսկե Մեդալ, Արդարադատության ակադեﬕայի հիﬓադրման 5 - ամյակի կապակցությամբ, Արդարադատության ակադեմիա, Երևան, 2018</h4>
                <h4>Ներսես Շնորհալի հուշամեդալ, Արդարադատության ակադեմիայում հեռավար ուսուցման համակարգի ներդրման համար, ՀՀ արդարադատության նախարարություն, Երևան, 2016</h4>
                <h4>Պատվոգիր, Երկարատև անբասիր աշխատանքի, համալսարանական կրթության և գիտության ոլորտում ձեռքբերումների, մասնագետների պատրաստման գործում ունեցած ավանդի համար և ԵՊՀ հիմնադրման 95 &ndash; ամյակի կապակցությամբ: Երևանի պետական համալսարան, Երևան, 2014</h4>
                <h4>Շնորհակալագիր, Սոցիալական աշխատանքի ինստիտուտի կայացման գործում ունեցած անձնական ներդրման համար: Հայաստանի Հանրապետության Աշխատանքի և սոցիալական հարցերի նախարարություն, Երևան, 2011</h4>
                <h4>Պատվոգիր, Անբասիր աշխատանքի, մասնագետների պատրաստման գործում ունեցած զգալի ավանդի համար և Երևանի Պետական Համալսարանի 90-ամյա տարեդարձի կապակցությամբ, Երևանի պետական համալսարան, Երևան, 2009</h4>
                </div>
                <div>
                <p><strong>Հեռաուսուցման և ՏՏ դեպարտամենտ</strong></p>
                <h4>Դեպարտամենտն իրականացնում է դատավորների և դատախազների տարեկան վերապատրաստումը հեռաուսուցման ձևաչափով: Հեռաուսուցման ծրագրերի միջոցով տարեկան կտրվածքով շուրջ 400 դատավոր և դատախազ անցնում է վերապատրաստում: Դեպարտամենտը, օտարերկրյա գործընկերների հետ համագործակցելով, մշակել և ներդրել է հետևյալ հեռաուսուցման դասընթացները.</h4>
                <h4>Ժամանակի և սթրեսի կառավարում</h4>
                <h4>Փաստարկում և հռետորիկա</h4>
                <h4>Մարդկային ռեսուրսների կառավարում իրավական ոլորտի մասնագետների համար</h4>
                <h4>Փախստականների իրավունք վարչական դատարանի դատավորների համար</h4>
                <h4>Երեխայի իրավունքների պաշտպանություն քրեական գործերով վարույթի ընթացքում</h4>
                <h4>Փախստականների իրավունք քրեական դատարանի դատավորների և դատախազների համար</h4>
                <h4>Դեպարտամենտը շարունակաբար մշակում և փորձարկում է նորարական թվային ուսուցման լուծումներ դատավորների և դատախազների համար՝ օգտագործելով խաղաֆիկացման տեխնիկաներ, միկրո ուսուցման մոտեցումներ, թվային վիճակագրության մոդելներ, սցենարների վրա հիմնված ուսուցման հնարներ:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата,место рождения</strong></p>
                <h4>13.03.1979 г., г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2011 г. январь-июнь.</p>
                <p>Школа права и дипломатии Флетчера при Университете Тафтса, США</p>
                </li>
                <li>
                <p>2001-2004 гг.</p>
                <p>Аспирантура социологического факультета ЕГУ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>1999-2001 гг.</p>
                <p>Магистратура социологического факультета ЕГУ</p>
                </li>
                <li>
                <p>1995 -1999 гг.</p>
                <p>Бакалавриат социологического факультета ЕГУ</p>
                </li>
                <li>
                <p>1995 г.</p>
                <p>окончил с золотой медалью среднюю школу N 147</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Ученая степень: звание</strong></p>
                <h4>Кандидат социологических наук</h4>
                </div>
                <div>
                <p><strong>Тема кандидатской диссертации</strong></p>
                <h4>&laquo;Проблемы внедрения и тенденции развития систем дистанционного обучения в РА&raquo;</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>С 1-го февраля 2017 г.</p>
                <p>руководитель департамента дистанционного обучения и информационных технологий Академии юстиции</p>
                </li>
                <li>
                <p>2014-2017 гг.</p>
                <p>начальник управления дистанционного обучения Академии юстиции</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>С сентября 2005 г.</p>
                <p>заведующий лаборатории дистанционного обучения факультета социологии ЕГУ</p>
                </li>
                <li>
                <p>2001 - 2003 гг.</p>
                <p>координатор проекта &laquo;Армянская сеть дистанционного обучения&raquo;, Европейская программа Темпус</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Переподготовки</strong></p>
                <h4>Участвовал в многочисленных профессиональных тренингах в Армении и зарубежом</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, английский, французский</h4>
                </div>
                <div>
                <p><strong>Публикации</strong></p>
                <h4>Автор и соавтор 9 учебных пособий и статей, 10 курсов и пакетов дистанционного обучения. Разработал 6 методологических дистанционных курсов на английском. Автор стратегии обучения и разработчик методологий 55 микро курсов электронного обучения.</h4>
                </div>
                <div>
                <p><strong>Награды и благодарности</strong></p>
                <h4>Медаль Академии юстиции, Академия юстиции, Ереван, 2018</h4>
                <h4>Памятная медаль Нерсес Шнорали, за внедрение системы дистанционного обучения в Академии юстиции, Министерство юстиции РА, Ереван, 2016</h4>
                <h4>Похвальная грамота, за многолетнюю безупречную работу, вклад в достижения в области университетского образования и науки, подготовку специалистов и 95-летие ЕГУ, Ереванский государственный университет, Ереван, 2014</h4>
                <h4>Благодарность, за личный вклад в создание Института социальной работы. Министерство труда и социальных вопросов РА, Ереван, 2011</h4>
                <h4>Похвальная грамота, за значительный вклад в работе подготовки специалистов и по случаю 90-летия Ереванского государственного университета, Ереванский государственный университет, Ереван, 2009.</h4>
                </div>
                <div>
                <p><strong>Департамент дистанционного обучения и информационных технологий</strong></p>
                <h4>Департамент осуществляет ежегодную переподготовку судей и прокуроров в формате дистанционного обучения. Около 400 судей и прокуроров ежегодно проходят переподготовку по программам дистанционного обучения. В сотрудничестве с иностранными партнерами Департамент разработал и внедрил следующие курсы дистанционного обучения:</h4>
                <h4>Управление временем и стрессом</h4>
                <h4>Аргументация и риторика</h4>
                <h4>Управление человеческими ресурсами для специалистов юридических профессий</h4>
                <h4>Права беженцев для судей Административного суда</h4>
                <h4>Защита прав детей в уголовном процессе</h4>
                <h4>Права беженцев для судей уголовного суда и прокуроров</h4>
                <h4>Департамент занимается разработкой и тестированием инновационных решений в области цифрового обучения для судей и прокуроров, используя методы играфикации и микрообучения, цифровые статистические модели и навыки обучения на основе учебных сценариев.</h4>
                </div>',

                'img' => 'about/workers/UMCMIdeIKTgjQQp98nKUEgbCoQ1oRd9S3Zw1ENoi.jpg',
            ],

            


            


            // ************************************************************************************************
            [
                'name_en' => 'Gevorg Israyelyan',
                'name_am' => 'Գևորգ Իսրայելյան',
                'name_ru' => 'Геворг Исраелян',
                'position_en' => 'Head of the Unit of Organization of Scientific Research and Programmatic-methodological Activities',
                'position_am' => 'Գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար',
                'position_ru' => 'Руководитель отдела по организации научно-исследовательских и программно-методических работ',


                'biography_en' => '<div>
                <p><strong>Date and Place of Birth&nbsp;</strong></p>
                <h4>12.01.1979, Yerevan</h4>
                </div>
                <div>
                <p><strong>Education</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2005-2009:</p>
                <p>Post-Graduate Degree (Aspirant) of the Police Academy of the Republic of Armenia</p>
                </li>
                <li>
                <p>1996-2001:</p>
                <p>The Faculty of Law of the Ministry of Internal Affairs of the Republic of Armenia</p>
                </li>
                <li>
                <p>1986-1996:</p>
                <p>Basic school Number 89 named after D.Varujan</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Academic degree, title</strong></h4>
                <h4>Candidate of Legal Sciences, Associate professor</h4>
                </div>
                <div>
                <h4><strong>Topic of PHD Thesis</strong></h4>
                <h4>&ldquo;Sexual crimes and their prevention in the RA&rdquo;</h4>
                </div>
                <div>
                <p><strong>Work experience</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 July up to now:</p>
                <p>Head of the Unit of Organization of Scientific research and Programmatic-methodological activities</p>
                </li>
                <li>
                <p>2020:</p>
                <p>legal advisor at State supervising service of the Republic of Armenia</p>
                </li>
                <li>
                <p>2020-2021:</p>
                <p>Head of the Chair of Civil Law and Civil Procedures at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2018-2020:</p>
                <p>Head of the Unit of Organization of Scientific research and Programmatic-methodological activities</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017- 2017:</p>
                <p>Associate Professor of the Chair of Criminal Law of the Law Faculty of the Saint Petersburg Institute of Foreign Economic Relations, Economics and Law, Yerevan Branch</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Acting Head of the Department of Law and Social Sciences at Yerevan Northern University</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 October - present:</p>
                <p>Advisor of International Security Academy</p>
                </li>
                <li>
                <p>2015-2016:</p>
                <p>Head of the Middle-vocational education Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2013-2015:</p>
                <p>Head of the Chair of Civil Law and Civil Procedures of the Law Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2011-2013:</p>
                <p>Associate Professor of the Chair of Administrative Law and Administrative activities of Police Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2011:</p>
                <p>Lecturer of the Chair of Administrative Law and Administrative activities of Police Faculty at the Police Educational Complex of the Republic of Armenia</p>
                </li>
                <li>
                <p>2002-2008:</p>
                <p>Educational department inspector at the Police Academy of the Republic of Armenia</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2002:</p>
                <p>Investigator in the Shahumyan Division of Criminal Investigation Department of the Yerevan City Department</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Trainings</strong></p>
                <h4>Participation in numerous professional trainings</h4>
                </div>
                <div>
                <p><strong>Foreign languages</strong></p>
                <h4>Russian, French</h4>
                </div>
                <div>
                <p><strong>Publications</strong></p>
                <h4>Author of 40 scientific, methodological and educational publications.</h4>
                </div>
                <div>
                <p><strong>Honors</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2006:</p>
                <p>3rd Degree Medal &ldquo;For Long-Term Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2011:</p>
                <p>2nd Degree Medal &ldquo;For Long-Term Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2012:</p>
                <p>Award Pin &ldquo;For Excellent Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2015:</p>
                <p>Souvenir Mark from Head of Police</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016:</p>
                <p>1st Degree Medal &ldquo;For Long-Term Service in Police&rdquo;</p>
                </li>
                <li>
                <p>2016:</p>
                <p>Medal of International Security Academy "Tigran the Great"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016:</p>
                <p>Medal of International Security Academy "Vardan Mamikonyan"</p>
                </li>
                <li>
                <p>2016:</p>
                <p>Medal "Mother\'s Gratitude to Artsakh Priests"</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Medal of International Security Academy "Marshal Baghramyan"</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Medal of International Security Academy "Zoravar Andranik"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017:</p>
                <p>Medal "Yerkrapah Union of Veterans 20 years"</p>
                </li>
                <li>
                <p>2017:</p>
                <p>Commemorative Medal "Yerkrapah Union of Veterans"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2018:</p>
                <p>Medal "Yerevan 2800"</p>
                </li>
                <li>
                <p>2018:</p>
                <p>Medal &ldquo;Preservation of the Armenian Identity&rdquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2019:</p>
                <p>Commemorative Medal &ldquo;Artsakh&rdquo;</p>
                </li>
                <li>
                <p>2019:</p>
                <p>Commemorative Medal &ldquo; Participated in the anti-terrorist operation in the Caucasus"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2020:</p>
                <p>Medal "Lion of Taron"</p>
                </li>
                <li>
                <p>2021:</p>
                <p>Medal "Poghos Nubar pasha"</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2021:</p>
                <p>Medal "Sose mayrik"</p>
                </li>
                <li>
                <p>2021:</p>
                <p>Medal "Saint Gevorg"</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Other information</strong></p>
                <h4>18 years of experience in scientific and pedagogic</h4>
                </div>
                <div>
                <p><strong>Unit of Organization of Scientific Research and Programmatic-methodological Activities</strong></p>
                <h4>The Unit implements scientific research, scientific and educational publications, cooperation with other scientific research organizations or institutions, development and continuous upgrading of training programs, teaching summeries and other teaching methodological materials required research for the development of internal and individual legal acts of the Rector of the Academy, as well as other drafts of legal acts, provides attendance of the trainees in scientific research activities at the Academy, participates in the organization of seminars and conferences, implements other functions.</h4>
                </div>',


                'biography_am' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>12.01.1979, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2005-2009 թթ.</p>
                <p>ՀՀ ոստիկանության ակադեմիայի հեռակա ուսուցման ասպիրանտուրա</p>
                </li>
                <li>
                <p>1996-2001 թթ.</p>
                <p>ՀՀ ՆԳՆ ակադեմիայի իրավաբանական ֆակուլտետ</p>
                </li>
                <li>
                <p>1986-1996 թթ.</p>
                <p>Դ. Վարուժանի անվան № 89 միջնակարգ դպրոց</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Գիտական աստիճան, կոչում</strong></h4>
                <h4>Իրավաբանական գիտությունների թեկնածու, դոցենտ</h4>
                </div>
                <div>
                <h4><strong>Ատենախոսության թեման</strong></h4>
                <h4>Սեռական հանցագործությունները և դրանց կանխումը ՀՀ-ում</h4>
                </div>
                <div>
                <p><strong>Աշխատանքային փորձ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2021թ. հուլիսից</p>
                <p>Արդարադատության ակադեմիայի գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար</p>
                </li>
                <li>
                <p>2020-2021 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի ակադեմիայի քաղաքացիական իրավունքի և քաղաքացիական դատավարության ամբիոնի պետ</p>
                </li>
                <li>
                <p>2020թ.</p>
                <p>ՀՀ պետական վերահսկողության ծառայության իրավախորհրդատու</p>
                </li>
                <li>
                <p>2018-2020թթ.</p>
                <p>Արդարադատության ակադեմիայի գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017-2018 թթ.</p>
                <p>Սանկտ-Պետերբուրգի արտաքին տնտեսական կապերի, տնտեսագիտության և իրավունքի ինստիտուտի Երևանի մասնաճյուղի իրավաբանական ֆակուլտետի քրեաիրավական առարկաների ամբիոնի դոցենտ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>Երևանի Հյուսիսային համալսարանի իրավագիտության և հասարակագիտական առարկաների ամբիոնի վարիչի ժամանակավոր պաշտոնակատար</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ. հոկտեմբերից</p>
                <p>Միջազգային անվտանգության ակադեմիայի խորհրդական</p>
                </li>
                <li>
                <p>2015-2016 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի քոլեջի ոստիկանական միջին մասնագիտական կրթության ֆակուլտետի պետ</p>
                </li>
                <li>
                <p>2013-2015 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի ակադեմիայի իրավագիտության ֆակուլտետի քաղաքացիական իրավունքի և քաղաքացիական դատավարության ամբիոնի պետ</p>
                </li>
                <li>
                <p>2011-2013 թթ.</p>
                <p>ՀՀ ոստիկանության կրթահամալիրի ակադեմիայի իրավագիտության ֆակուլտետի վարչական իրավունքի և ոստիկանության վարչական գործունեության ամբիոնի դոցենտ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2011 թթ.</p>
                <p>ՀՀ ոստիկանության ակադեմիայի իրավագիտության ֆակուլտետի վարչական իրավունքի և ոստիկանության վարչական գործունեության ամբիոնի դասախոս</p>
                </li>
                <li>
                <p>2002-2008 թթ.</p>
                <p>ՀՀ ոստիկանության ակադեմիայի ուսումնական բաժնի տեսուչ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2002 թթ.</p>
                <p>ԵՔՎ Շահումյանի բաժնի ՔՀԲ օպերլիազոր</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Վերապատրաստումներ</strong></p>
                <h4>Մասնակցել է մասնագիտական բազմաթիվ վերապատրաստումների</h4>
                </div>
                <div>
                <p><strong>Օտար լեզուներ</strong></p>
                <h4>Ռուսերեն, ֆրանսերեն</h4>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>Հեղինակ է 4 տասնյակից ավել գիտական, ուսումնական և մեթոդական հրատարակությունների</h4>
                </div>
                <div>
                <p><strong>Պարգևատրումներ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2006 թ.</p>
                <p>&laquo;Ոստիկանությունում երկարամյա ծառայության համար&raquo; 3-րդ աստիճանի մեդալ</p>
                </li>
                <li>
                <p>2011 թ.</p>
                <p>&laquo;Ոստիկանությունում երկարամյա ծառայության համար&raquo; 2-րդ աստիճանի մեդալ</p>
                </li>
                <li>
                <p>2012 թ.</p>
                <p>&laquo;Ոստիկանությունում գերազանց ծառայության համար&raquo; կրծքանշան</p>
                </li>
                <li>
                <p>2015 թ.</p>
                <p>Ոստիկանության պետի հուշանվեր-նշան</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ.</p>
                <p>&laquo;Ոստիկանությունում երկարամյա ծառայության համար&raquo; 1-ին աստիճանի մեդալ</p>
                </li>
                <li>
                <p>2016 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Տիգրան Մեծ&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Վարդան Մամիկոնյան&raquo; մեդալ</p>
                </li>
                <li>
                <p>2016 թ.</p>
                <p>&laquo;Մայրական երախտագիտություն Արցախի քաջորդիներին&raquo; մեդալ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Մարշալ Բաղրամյան&raquo; մեդալ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>Միջազգային անվտանգության ակադեմիայի &laquo;Զորավար Անդրանիկ&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ.</p>
                <p>&laquo;ԵԿՄ 20 տարի&raquo; մեդալ</p>
                </li>
                <li>
                <p>2017 թ.</p>
                <p>ԵԿՄ հուշամեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2018 թ.</p>
                <p>&laquo;Երևան 2800&raquo; մեդալ</p>
                </li>
                <li>
                <p>2018 թ.</p>
                <p>&laquo;Հայապահպանության համար&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2019 թ.</p>
                <p>&laquo;Արցախ&raquo; հուշամեդալ</p>
                </li>
                <li>
                <p>2019 թ.</p>
                <p>&laquo;Կովկասում հակաահաբեկչական օպերացիայի մասնակցի&raquo; հուշամեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2020 թ.</p>
                <p>&laquo;Տարոնի առյուծ&raquo; մեդալ</p>
                </li>
                <li>
                <p>2021 թ.</p>
                <p>&laquo;Պողոս Նուբար փաշա&raquo; մեդալ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 թ.</p>
                <p>&laquo;Սոսե մայրիկ&raquo; մեդալ</p>
                </li>
                <li>
                <p>2021 թ.</p>
                <p>&laquo;Սուրբ Գևորգ&raquo; մեդալ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>18 տարվա գիտամանկավարժական գործունեության փորձ</h4>
                </div>
                <div>
                <p><strong>Գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժին</strong></p>
                <h4>Բաժինն իրականացնում է գիտական հետազոտություններ, գիտական և ուսումնական հրատարակություններ, գիտահետազոտական այլ կազմակերպությունների կամ կառույցների հետ համագործակցություն, ուսուցման ծրագրերի, դասավանդման սեղմագրերի և այլ ուսումնամեթոդական նյութերի մշակման և շարունակական նորացման աշխատանքներ, Ակադեմիայի ռեկտորի ներքին և անհատական իրավական ակտերի, ինչպես նաև իրավական այլ ակտերի նախագծերի մշակման համար անհրաժեշտ հետազոտություններ, ապահովում է ունկնդիրների մասնակցությունը Ակադեմիայում անցկացվող գիտահետազոտական աշխատանքներին, մասնակցում է սեմինարների և գիտաժողովների կազմակերպման աշխատանքներին, իրականացնում այլ գործառույթներ:</h4>
                </div>',


                'biography_ru' => '<div>
                <p><strong>Дата и место рождения</strong></p>
                <h4>12.01.1979, г. Ереван</h4>
                </div>
                <div>
                <p><strong>Образование</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2005-2009 гг.</p>
                <p>аспирантура Академии полиции РА (заочно)</p>
                </li>
                <li>
                <p>1996-2001 гг.</p>
                <p>юридический факультет Академии МВД РА</p>
                </li>
                <li>
                <p>1986-1996 гг.</p>
                <p>средняя школа № 89 имени Д. Варужана</p>
                </li>
                </ul>
                </div>
                <div>
                <h4><strong>Ученая степень, звание</strong></h4>
                <h4>Кандидат юридических наук, доцент</h4>
                </div>
                <div>
                <h4><strong>Тема кандидатской диссертации</strong></h4>
                <h4>Половые преступления и их предупреждение в РА</h4>
                </div>
                <div>
                <p><strong>Трудовая деятельность</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>C июла 2021г.</p>
                <p>руководитель отдела научно-исследовательских и программно-методических работ Академии юстиции</p>
                </li>
                <li>
                <p>2020-2021 гг.</p>
                <p>начальник кафедры гражданского права и гражданского процесса Академии Образовательного комплекса полиции РА</p>
                </li>
                <li>
                <p>2020г.</p>
                <p>юридический консультант Службы государственной контрольной РА</p>
                </li>
                <li>
                <p>2018-2020 гг.</p>
                <p>руководитель отдела научно-исследовательских и программно-методических работ Академии юстиции</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017-2018 гг.</p>
                <p>доцент кафедры уголовно-правовых дисциплин юридического факультета ереванского филиала Санкт-Петербургского института внешнеэкономических связей, экономики и права</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>Временно исполняющий обязанности заведующего кафедры Правоведения и общественных дисциплин Ереванского Северного университета</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>C октября 2016 г.</p>
                <p>советник Mеждународной aкадемии безопасности</p>
                </li>
                <li>
                <p>2015-2016 гг.</p>
                <p>начальник факультета полицейского среднего специального образования колледжа Образовательного комплекса полиции РА</p>
                </li>
                <li>
                <p>2013-2015 гг.</p>
                <p>начальник кафедры гражданского права и гражданского процесса факультета правоведения Академии Образовательного комплекса полиции РА</p>
                </li>
                <li>
                <p>2011-2013 гг.</p>
                <p>доцент кафедры административного права и административной деятельности факультета правоведения Образовательного комплекса Академии полиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2011 гг.</p>
                <p>преподаватель кафедры административного права и административной деятельности факультета правоведения Академии полиции РА</p>
                </li>
                <li>
                <p>2002-2008 гг.</p>
                <p>инспектор учебного отдела Академии полиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2002 гг.</p>
                <p>оперуполномоченный ОУР Шаумянского РОВД Управления г. Еревана</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Переподготовки</strong></p>
                <h4>Участвовал в многочисленных профессиональных тренинга</h4>
                </div>
                <div>
                <p><strong>Иностранные языки</strong></p>
                <h4>Русский, французский</h4>
                </div>
                <div>
                <p><strong>Публикации</strong></p>
                <h4>Автор более сорока научных, методических и учебных публикаций.</h4>
                </div>
                <div>
                <p><strong>Награды</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2006 г.&nbsp;</p>
                <p>медаль &laquo;За долголетнюю службу в полиции&raquo; 3 степени</p>
                </li>
                <li>
                <p>2011 г.</p>
                <p>медаль &laquo;За долголетнюю службу в полиции&raquo; 2 степени</p>
                </li>
                <li>
                <p>2012 г.</p>
                <p>нагрудный знак &laquo;За отличную службу в полиции&raquo;</p>
                </li>
                <li>
                <p>2015 г.</p>
                <p>нагрудный знак-сувенир начальника Полиции РА</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 г.</p>
                <p>медаль &laquo;За долголетнюю службу в полиции&raquo; 1 степени</p>
                </li>
                <li>
                <p>2016 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Тигран Великий&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Вардан Мамиконян&raquo;</p>
                </li>
                <li>
                <p>2016 г.</p>
                <p>медаль &laquo;Материнская благодарность храбрым сыновям Арцаха&raquo;</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Маршал Баграмян&raquo;</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>медаль Mеждународной aкадемии безопасности &laquo;Полководец Андраник&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 г.</p>
                <p>медаль &laquo;20 лет Cоюз добровольцев Eркрапа&raquo;</p>
                </li>
                <li>
                <p>2017 г.</p>
                <p>памятная медаль &laquo;Cоюз добровольцев Eркрапа&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2018 г.</p>
                <p>медаль &laquo;Ереван 2800&raquo;</p>
                </li>
                <li>
                <p>2018 г.</p>
                <p>медаль &laquo;За сохранение армянской идентичности&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2019 г.</p>
                <p>памятная медаль &laquo;Арцах&raquo;</p>
                </li>
                <li>
                <p>2019 г.</p>
                <p>памятная медаль &laquo;Участнику контртеррористической операции на Кавказе&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2020 г.</p>
                <p>медаль &laquo;Лев Тарона&raquo;</p>
                </li>
                <li>
                <p>2021 г.</p>
                <p>медаль &laquo;Погос Нубар паша&raquo;</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 г.</p>
                <p>медаль &laquo;Сосе майрик&raquo;</p>
                </li>
                <li>
                <p>2021 г.</p>
                <p>Медаль &laquo;Святой Геворг&raquo;</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Иные сведения</strong></p>
                <h4>18 лет научно-преподавательской деятельности</h4>
                </div>
                <div>
                <p><strong>Oтдел по организации научно-исследовательских и программно-методических работ</strong></p>
                <h4>Отдел осуществляет научные исследования, научные и учебные публикации, сотрудничество с иными научно-исследовательскими организациями и учреждениями, разработку и постоянную модернизацию учебных программ, учебно-методологических материалов, проводит необходимые исследования для разработки проектов внутренних и индивидуальных правовых актов ректора Академии, а также иных правовых актов, обеспечивает участие слушателей в научно-исследовательских работах, проводимых в Академии, участвует в работе организации семинаров и конференций, выполняет другие функции.</h4>
                </div>',

                'img' => 'about/workers/cdqLGnykyXChm1j6OzeC4LXtLgydOG0rvZbevrew.jpg',
            ],
        ]);
    }
}
