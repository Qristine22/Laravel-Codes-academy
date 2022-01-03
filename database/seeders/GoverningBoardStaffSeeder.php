<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoverningBoardStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('governing_board_staff')->insert([
            [
                'name_en' => 'Gevorg Baghdasaryan',
                'name_am' => 'Գևորգ Բաղդասարյան',
                'name_ru' => 'Геворг Багдасарян',
                'position_en' => 'Deputy Prosecutor General of the RA (Chairman of the Board)',
                'position_am' => 'ՀՀ գլխավոր դատախազի տեղակալ (Խորհրդի նախագահ)',
                'position_ru' => 'Заместитель Генерального прокурора РА (Председатель Совета)',
                'img' => 'about/governing-board-staff/7KzeWgWEoBDAOvKzgr7Yi8sESvF6j9Y3GIdjuoXD.png',

                'biography' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1987 թ․, 14 հոկտեմբերի, ք․ Ալավերդի</h4>
                </div>
                <div>
                <p><strong>Կրթություն, գիտահետազոտական գործունեություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2003-2007 թթ.</p>
                <p>1987 թ․, 14 հոկտեմբերի, ք․ Ալավերդի</p>
                </li>
                <li>
                <p>2007-2009 թթ.</p>
                <p>ԵՊՀ իրավագիտության ֆակուլտետ, մագիստրատուրա</p>
                </li>
                <li>
                <p>2009-2012 թթ.</p>
                <p>ԵՊՀ իրավագիտության ֆակուլտետ, քրեական դատավարության և կրիմինալիստիկայի ամբիոնի հայցորդ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Գիտական աստիճան, կոչում</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2012 թ.</p>
                <p>իրավաբանական գիտությունների թեկնածու</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Աշխատանքային գործունեություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2020 թ.-ից</p>
                <p>ՀՀ գլխավոր դատախազի տեղակալ</p>
                </li>
                <li>
                <p>2018-2020 թթ.</p>
                <p>Երևան քաղաքի դատախազ</p>
                </li>
                <li>
                <p>2016-2018 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության մեղադրանքի պաշտպանության և դատական ակտերի բողոքարկման վարչության պետ</p>
                </li>
                <li>
                <p>2015-2016 թթ.</p>
                <p>Երևան քաղաքի դատախազի տեղակալ</p>
                </li>
                <li>
                <p>2014-2015 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության մեղադրանքի պաշտպանության և դատական ակտերի բողոքարկման վարչության պետի տեղակալ</p>
                </li>
                <li>
                <p>2014 թ. մարտ-մայիս</p>
                <p>ՀՀ գլխավոր դատախազության մեղադրանքի պաշտպանության և դատական ակտերի բողոքարկման վարչության ավագ դատախազ</p>
                </li>
                <li>
                <p>2013-2014 թթ.</p>
                <p>Երևան քաղաքի դատախազության դատախազ</p>
                </li>
                <li>
                <p>2013 թ. մարտ-նոյեմբեր</p>
                <p>Երևան քաղաքի Շենգավիթ վարչական շրջանի դատախազության դատախազ</p>
                </li>
                <li>
                <p>2012 թ․-ից</p>
                <p>ՀՀ-ում Ֆրանսիական համալսարանի դասախոս (ՀՀ Քրեական դատավարություն)</p>
                </li>
                <li>
                <p>2012 թ․-ից</p>
                <p>ՀՀ Ոստիկանության կրթահամալիրի հրավիրված դասախոս (ՀՀ Քրեական դատավարություն)</p>
                </li>
                <li>
                <p>2009-2013 թթ.</p>
                <p>Հյուսիսային համալսարանի դասախոս (Մինչդատական վարույթի նկատմամբ դատական վերահսկողության հիմնախնդիրները)</p>
                </li>
                <li>
                <p>2008-2013 թթ.</p>
                <p>ՀՀ վերաքննիչ քրեական դատարանի նախագահի խորհրդական</p>
                </li>
                <li>
                <p>2008 թ.</p>
                <p>ՀՀ վերաքննիչ քրեական դատարանի աշխատակազմի իրավական փորձաքննությունների ծառայության կրտսեր մասնագետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>Դասային աստիճանը՝ արդարադատության երրորդ դասի պետական խորհրդական</h4>
                <h4>ՀՀ դատախազության կոլեգիայի անդամ</h4>
                <h4>ՀՀ դատախազության որակավորման հանձնաժողովի անդամ</h4>
                <h4>ՀՀ իրավաբանների միության անդամ</h4>
                <h4>&laquo;Օրինականություն&raquo; գիտագործնական և գիտամեթոդական հանդեսի խմբագրական խորհրդի անդամ</h4>
                <h4>Ամուսնացած է, ունի մեկ դուստր</h4>
                </div>',
            ],
            [
                'name_en' => 'Eghiazar Avagyan',
                'name_am' => 'Եղիազար Ավագյան',
                'name_ru' => 'Егиазар Авагян',
                'position_en' => 'Head of the Department of International Legal Cooperation at the Prosecutor General’s Office of the RA',
                'position_am' => 'ՀՀ գլխավոր դատախազության միջազգային-իրավական համագործակցության վարչության պետ',
                'position_ru' => 'Начальник управления международно-правового сотрудничества Генеральной прокуратуры РА',
                'img' => 'about/governing-board-staff/4RyKnBIsUJWsN7TJWIxpFE4zoIf1UvdXogoVeLCH.png',

                'biography' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1977թ., 15 հուլիսի, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1994-1999 թթ.</p>
                <p>Երևանի պետական համալսարանի իրավաբանական ֆակուլտետ</p>
                </li>
                <li>
                <p>2008 թ.</p>
                <p>Թաֆթս համալսարանի իրավունքի և դիվանագիտության Ֆլետչերի դպրոց (ԱՄՆ)-իրավական ուսմունքների և միջազգային իրավունքի ուսուցման ծրագիր</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Աշխատանքային գործունեություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2016 թ․</p>
                <p>հոկտեմբերի 3-ին նշանակվել է ՀՀ գլխավոր դատախազության միջազգային-իրավական համագործակցության վարչության պետ</p>
                </li>
                <li>
                <p>2016 թ․</p>
                <p>ՀՀ գլխավոր դատախազության միջազգային համագործակցության և իրավական ապահովման վարչության պետ</p>
                </li>
                <li>
                <p>2015-2016 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության միջազգային-իրավական կապերի բաժնի պետ</p>
                </li>
                <li>
                <p>2012-2015 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության միջազգային-իրավական կապերի բաժնի ավագ դատախազ</p>
                </li>
                <li>
                <p>2009-2012 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության միջազգային-իրավական կապերի բաժնի դատախազ</p>
                </li>
                <li>
                <p>2007-2009 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության օտարերկրյա դատական ատյաններում պետական շահերի պաշտպանության բաժնի դատախազ</p>
                </li>
                <li>
                <p>2006-2007 թթ.</p>
                <p>Երևան քաղաքի Արաբկիր և Քանաքեռ-Զեյթուն համայնքների դատախազի օգնական</p>
                </li>
                <li>
                <p>2005-2006 թթ.</p>
                <p>ՀՀ կառավարության աշխատակազմի իրավաբանական վարչության առաջատար մասնագետ</p>
                </li>
                <li>
                <p>2003-2005 թթ.</p>
                <p>ՀՀ արդարադատության նախարարության իրավական ակտերի փորձաքննության վարչության առաջին կարգի մասնագետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <h4>Դասային աստիճանը՝ արդարադատության առաջին դասի խորհրդական</h4>
                <h4>1999-2001 թթ. պարտադիր զինվորական ծառայություն ՀՀ զինված ուժերում</h4>
                <h4>Ամուսնացած է, ունի երեք որդի</h4>
                </div>',
            ],
            [
                'name_en' => 'Armen Marukhyan',
                'name_am' => 'Արմեն Մարուխյան',
                'name_ru' => 'Армен Марухян',
                'position_en' => 'Head of the Department of Organization, Supervision and Legal Assistance of the Prosecutor’s General Office of the RA',
                'position_am' => 'ՀՀ գլխավոր դատախազության կազմակերպական-վերահսկողական և իրավական ապահովման վարչության պետ',
                'position_ru' => 'Начальник управления по организации, контролю и правовому обеспечению Генеральной прокуратуры РА',
                'img' => 'about/governing-board-staff/89AHq121iHob8AVQDR34Czhb3ZorU5sSrU3tOAJt.png',

                'biography' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1978 թ., 30 օգոստոսի, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2001-2004 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետի ասպիրանտուրա</p>
                </li>
                <li>
                <p>1999-2001 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետի մագիստրատուրա (գերազանցությամբ)</p>
                </li>
                <li>
                <p>1999 թ.</p>
                <p>Ստրասբուրգի մարդու իրավունքների ինստիտուտ</p>
                </li>
                <li>
                <p>1995-1999 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետի բակալավրիատ (գերազանցությամբ)</p>
                </li>
                </ul>
                </div>
                <div><strong>Գիտական աստիճան</strong></div>
                <h4><strong>Իրավաբանական գիտությունների թեկնածու</strong></h4>
                <div><strong>Ատենախոսության թեման</strong></div>
                <h4><strong>&laquo;Միջազգային-իրավական պատասխանատվությունը միջազգային հանցագործությունների համար&raquo;</strong></h4>
                <div>
                <p><strong>Աշխատանքային գործունեություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2017 թ.-ից մինչ օրս</p>
                <p>ՀՀ գլխավոր դատախազության կազմակերպական-վերահսկողական և իրավական ապահովման վարչության պետ</p>
                </li>
                <li>
                <p>2016-2017 թթ.</p>
                <p>Տավուշի մարզի դատախազ</p>
                </li>
                <li>
                <p>2013-2016թթ.</p>
                <p>ՀՀ գլխավոր դատախազության հետաքննության և նախաքննության օրինականության նկատմամբ հսկողության վարչության պետի տեղակալ</p>
                </li>
                <li>
                <p>2013 թ.</p>
                <p>հունիսից նոյեմբեր ՀՀ գլխավոր դատախազության մարդու դեմ ուղղված հանցագործությունների գործերով վարչության պետի տեղակալ</p>
                </li>
                <li>
                <p>2008-2013 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության մարդու դեմ ուղղված հանցագործությունների գործերով վարչության ավագ դատախազ</p>
                </li>
                <li>
                <p>2007-2008 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության միջազգային-իրավական կապերի բաժնի ավագ դատախազ</p>
                </li>
                <li>
                <p>2005-2007 թթ.</p>
                <p>ՀՀ գլխավոր դատախազության միջազգային-իրավական կապերի բաժնի դատախազ</p>
                </li>
                <li>
                <p>2003-2005 թթ.</p>
                <p>ՀՀ սահմանադրական դատարանի աշխատակազմի իրավախորհրդատվական ծառայության գլխավոր մասնագետ</p>
                </li>
                <li>
                <p>2001-2003 թթ.</p>
                <p>ՀՀ սահմանադրական դատարանի աշխատակազմի արտաքին կապերի բաժնի առաջատար մասնագետ</p>
                </li>
                <li>
                <p>2003 թ. սեպտեմբերից մինչ օրս</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետի եվրոպական և միջազգային իրավունքի ամբիոնի դասախոս</p>
                </li>
                </ul>
                </div>
                <div><strong>Հասարակական գործունեություն</strong></div>
                <h4>1996-2003 թթ. &laquo;Հայ երիտասարդ իրավագետների միություն&raquo; ՀԿ նախագահ</h4>
                <div>
                <p><strong>Պարգևներ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 թ․</p>
                <p>ՀՀ նախագահի կողմից պարգևատրվել է &laquo;Մխիթար Գոշ&raquo; մեդալով</p>
                </li>
                <li>
                <p>2020 թ.</p>
                <p>ՀՀ ազգային ժողովի նախագահի կողմից պարգևատրվել է շնորհակալագրով</p>
                </li>
                <li>
                <p>2018 թ.</p>
                <p>ՀՀ գլխավոր դատախազի հրամանով պարգևատրվել է ՀՀ դատախազության 100-ամյակ հոբելյանական մեդալով</p>
                </li>
                <li>
                <p>2013 թ.</p>
                <p>ՀՀ գլխավոր դատախազի հրամանով պարգևատրվել է ՀՀ դատախազության 95 տարի հոբելյանական մեդալով</p>
                </li>
                </ul>
                </div>
                <div><strong>Այլ տեղեկություններ</strong></div>
                <h4>1996-2003 թթ. &laquo;Հայ երիտասարդ իրավագետների միություն&raquo; ՀԿ նախագահ</h4>'
            ],
            [
                'name_en' => 'Arman Tovmasyan',
                'name_am' => 'Արման Թովմասյան',
                'name_ru' => 'Арман Товмасян',
                'position_en' => 'Judge of the Administrative Court of Appeal of the RA',
                'position_am' => 'ՀՀ վերաքննիչ վարչական դատարանի դատավոր',
                'position_ru' => 'Судья Административного апелляционного суда РА',
                'img' => 'about/governing-board-staff/3pmvcCL0klEsjQ0udUVTdYfSJaavxaZjDN8DyDk6.png',

                'biography' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1981 թ., 23 ապրիլի, ք. Երևան</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>1996-2000 թթ.</p>
                <p>ԵՊՀ իրավաբանական ֆակուլտետ</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Աշխատանքային գործունեություն</strong></p>
                <h4>ՀՀ Նախագահի 2017 թ.-ի հոկտեմբերի 13-ի հրամանագրով նշանակվել է ՀՀ վերաքննիչ վարչական դատարանի դատավոր</h4>
                <h4>ՀՀ Նախագահի 2010 թ.-ի դեկտեմբերի 13-ի հրամանագրով նշանակվել է ՀՀ վարչական դատարանի դատավոր</h4>
                <h4>ՀՀ Նախագահի 2009 թ.-ի փետրվարի 27-ի հրամանագրով նշանակվել է Լոռու մարզի ընդհանուր իրավասության դատարանի դատավոր</h4>
                <ul style="list-style-type: none;">
                <li>
                <p>2008-2009 թթ.</p>
                <p>Սյունիքի մարզի ընդհանուր իրավասության դատարանի դատավոր</p>
                </li>
                <li>
                <p>2007 թ.</p>
                <p>ՀՀ դատական դեպարտամենտի դատական պրակտիկայի ամփոփման վարչության դատական վիճակագրության բաժնի պետ</p>
                </li>
                <li>
                <p>2006 թ.</p>
                <p>ՀՀ Դատական դեպարտամենտի դատական պրակտիկայի ամփոփման և դատական վիճակագրության վարչության մասնագետ</p>
                </li>
                <li>
                <p>2006 թ.</p>
                <p>Փոխադրման կարգով նշանակվել է ՀՀ Վճռաբեկ դատարանի աշխատակազմի դատական պրակտիկայի ամփոփման և դատական վիճակագրության վարչության մասնագետի պաշտոնում</p>
                </li>
                <li>
                <p>2005 թ.</p>
                <p>Փոխադրման կարգով նշանակվել է ՀՀ Դատարանների նախագահների խորհրդի քարտուղարության իրավաբանական բաժնի մասնագետի պաշտոնում</p>
                </li>
                <li>
                <p>2003 թ.</p>
                <p>ՀՀ դատարանների նախագահների խորհրդի աշխատակազմի վիճակագիր</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Այլ տեղեկություններ</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2000-2002 թթ.</p>
                <p>Ծառայել է ՀՀ Զինված ուժերում</p>
                </li>
                <li>
                <p>2018 թ.-ի հուլիսի 27-ին</p>
                <p>ՀՀ դատավորների ընդհանուր ժողովի կողմից ընդգրկվել է Կարգապահական հարցերի հանձնաժողովի կազմում</p>
                </li>
                </ul>
                </div>'
            ],
            [
                'name_en' => 'Yeranuhi Tumanyants',
                'name_am' => 'Երանուհի Թումանյանց',
                'name_ru' => 'Ерануи Туманянц',
                'position_en' => 'Deputy minister of justice of the RA',
                'position_am' => 'ՀՀ արդարադատության նախարարի տեղակալ',
                'position_ru' => 'Заместитель министра юстиции РА',
                'img' => 'about/governing-board-staff/o7Hgx9v0VsNcKwEv46gpF8wVMTEl2fSgjROb7VjM.png',

                'biography' => '<div>
                <p><strong>Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</strong></p>
                <h4>1985 թ., ապրիլի 24, Վանաձոր</h4>
                </div>
                <div>
                <p><strong>Կրթություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2009 թ․ սեպտեմբեր</p>
                <p>Ամառային դպրոց &laquo;Մարդու իրավունքների պաշտպանության եվրոպական համակարգ&raquo; (Գերմանիա, Ֆրանկֆուրտ (Օդեր)</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Գիտական աստիճան</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2019 թ</p>
                <p>իրավաբանական գիտությունների թեկնածու (ՀՀ պետական կառավարման ակադեմիա, &laquo;Ինքնուրույնության սկզբունքը դատական իշխանության համակարգում` սահմանադրական բարեփոխումների համատեքստում&raquo;)</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Աշխատանքային գործունեություն</strong></p>
                <ul style="list-style-type: none;">
                <li>
                <p>2021 թ. սեպտեմբերից</p>
                <p>ՀՀ արդարադատության նախարարի տեղակալ</p>
                </li>
                <li>
                <p>2021 թ․ սեպտեմբեր</p>
                <p>Իրավունքի զարգացման և պաշտպանության հիմնադրամի մի շարք ծրագրերի/հետազոտությունների փորձագետ, այդ թվում՝ &laquo;Աջակցություն Հայաստանի կողմից Մարդու իրավունքների եվրոպական կոնվենցիայի 6-րդ հոդվածով կայացված վճիռների կատարմանը&raquo; (Եվրոպայի խորհուրդ),</p>
                </li>
                <li>
                <p>2021 թ․ հուլիսից-սեպտեմբեր</p>
                <p>Իրավունքի զարգացման և պաշտպանության հիմնադրամի կարողությունների զարգացման ծրագիր (Ժողովրդավարության եվրոպական հիմնադրամ),</p>
                </li>
                <li>
                <p>2021 թ. փետրվարից-հունիս</p>
                <p>&laquo;Աշխատողների իրավունքների վերաբերյալ օրենսդրության կատարելագործում&raquo; (ԲՀՀ-Հայաստան),</p>
                </li>
                <li>
                <p>2020 թ. հունիս &ndash; 2021 թ. սեպտեմբեր</p>
                <p>&laquo;Դատարանների գործունեության արդյունավետության բարձրացում՝ դատական պրակտիկայի մշտադիտարկման և Մարդու իրավունքների եվրոպական դատարանի վճիռներով արձանագրված համակարգային խնդիրների վերհանման միջոցով&raquo; (Եվրասիա համագործակցություն հիմնադրամի &laquo;Աջակցություն դատաիրավական բարեփոխումներին&raquo; ծրագիր),</p>
                </li>
                <li>
                <p>2020 &ndash; 2020 թթ.</p>
                <p>&laquo;Դատավորների նկատմամբ կարգապահական վարույթների թափանցիկության բարձրացումը որպես նրանց անկախության երաշխիք&raquo; (Արևելյան գործընկերության քաղաքացիական հասարակության ֆորումի Հայաստանի ազգային պլատֆորմի քարտուղարություն),</p>
                </li>
                <li>
                <p>2020 &ndash; 2021 թթ․</p>
                <p>&laquo;Ադրբեջանի կողմից Արցախի քաղաքացիական բնակավայրերի և խաղաղ բնակչության նկատմամբ իրականացվող թիրախային հարձակումների, մարդու իրավունքների միջազգային իրավունքի և միջազգային մարդասիրական իրավունքի նորմերի խախտումների փաստագրում ու վերլուծություն&raquo; (ԲՀՀ-Հայաստան),</p>
                </li>
                <li>
                <p>2019 &ndash; 2020 թթ․</p>
                <p>&laquo;Տեղեկատվության ազատության իրավունքին առնչվող օրենսդրության ուսումնասիրություն. բարեփոխման հայեցակարգ&raquo; (ԲՀՀ-Հայաստան),</p>
                </li>
                <li>
                <p>2020 &ndash; 2021 թթ.</p>
                <p>ծրագրի համակարգող ՀՀ - ԵՄ միջև Համապարփակ և Ընդլայնված Գործընկերության Համաձայնագրի կիրարկման մշտադիտարկում` քրեական և քրեական դատավարության օրենսդրության, ընտրական օրենսդրության բարեփոխումների, հավաքների ազատության, ԶԼՄ-ների, տեղեկատվության ու կարծիքի արտահայտման ազատության ոլորտներում (ԲՀՀ-Հայաստան),</p>
                </li>
                <li>
                <p>2021 թ․ հունվար - մարտ</p>
                <p>դասախոս (ՀՀ ոստիկանության պարեկային ծառայություն, &laquo;ՀՀ Սահմանադրական իրավունքի հիմունքներ, մարդու իրավունքները և ոստիկանությունը&raquo; մոդուլ),</p>
                </li>
                <li>
                <p>2020 &ndash; 2021 թթ․</p>
                <p>գիտական խորհրդի քարտուղար (&laquo;Մանց&raquo; համալսարան),</p>
                </li>
                <li>
                <p>2017 &ndash; 2021 թթ․</p>
                <p>դիտորդական առաքելությունների (&laquo;Ականատես&raquo;, &laquo;Քաղաքացի դիտորդ&raquo;) իրավական հարցերով խորհրդատու, փաստաբան, դիտորդների և իրավաբանների դասընթացավար (&laquo;Թրանսփարենսի Ինթերնեշնլ հակակոռուպցիոն կենտրոն&raquo; ՀԿ, Եվրոպական Միություն և Ժողովրդավարության ազգային հիմնադրամ), կարճաժամկետ դիտորդ միջազգային դիտորդական առաքելությունում (Ընտրությունները դիտարկող կազմակերպությունների եվրոպական ցանց (ENEMO), Ուկրաինայի` 2019 թ. նախագահական ընտրություններ),</p>
                </li>
                <li>
                <p>2016 թ.</p>
                <p>փաստաբան,</p>
                </li>
                <li>
                <p>2006 &ndash; 2016 թթ․</p>
                <p>ՀՀ Մարդու իրավունքների պաշտպանի տեղակալ, խորհրդական, Բռնությունների կանխարգելման վարչության պետ, քաղաքացիական և քաղաքական իրավունքների պաշտպանության բաժնի պետ, նույն բաժնի ավագ մասնագետ, մասնագետ, Մարդու իրավունքների պաշտպանի ռեֆերենտ</p>
                </li>
                </ul>
                <ul style="list-style-type: none;">
                <li>
                <p>2012 - 2013 թթ․</p>
                <p>ԵԱՀԿ երևանյան գրասենյակի փորձագետ (Մարդու իրավունքների պաշտպանի կարողությունների զարգացման ծրագիր),</p>
                </li>
                <li>
                <p>2008 &ndash; 2011 թթ․</p>
                <p>դասախոս (Երևանի &laquo;Մանց&raquo; համալսարան, &laquo;Մարդու իրավունքներ&raquo;, &laquo;Սահմանադրական իրավունք&raquo;, &laquo;Եվրոպական իրավունք&raquo;, &laquo;Միջազգային մասնավոր իրավունք&raquo; առարկաներ)</p>
                </li>
                </ul>
                </div>
                <div>
                <p><strong>Հրապարակումներ</strong></p>
                <h4>&laquo;Ինքնուրույնության սկզբունքը դատական իշխանության համակարգում&raquo; (մենագրություն, 2018 թ. մայիս)</h4>
                <h4>&laquo;Դիտորդների, վստահված անձանց և ԶԼՄ ներկայացուցիչների համար&raquo; (ձեռնարկ, համահեղինակ, 2017 թ. &laquo;Քաղաքացի դիտորդ&raquo; նախաձեռնություն)</h4>
                <h4>Տասնյակ գիտական հոդվածների հեղինակ (մարդու իրավունքների պաշտպանության ոլորտ, 2013-2020 թթ.)</h4>
                </div>'
            ],
        ]);
    }
}
