@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.about.header-bot")
@endsection

@section('content')
    <main>
        <section class="section-text section-top">
            <div class="wrapper">
                <div class="member__cont">
                    <div class="member__info">
                        <h2 class="member__name">Գեվորգ Բաղդասարյան</h2>
                        <p class="member__position text-20">ՀՀ գլխավոր դատախազի տեղակալ (Խորհրդի նախագահ)</p>
                        <div class="member__info_block">
                            <p class="member__info_title text-18">Ծննդյան տարեթիվ, ամսաթիվ, ծննդավայր</p>
                            <p class="member__info_item text-18">1987 թ․, 14 հոկտեմբերի, ք․ Ալավերդի</p>
                        </div>
                        <div class="member__info_block">
                            <p class="member__info_title text-18">Կրթություն, գիտահետազոտական գործունեություն</p>
                            <ul class="member__info_list">
                                <li class="member__info_item flex">
                                    <p class="member__info_subtitle">2003-2007 թթ.</p>
                                    <p class="member__info_inner text-18">1987 թ․, 14 հոկտեմբերի, ք․ Ալավերդի</p>
                                </li>
                                <li class="member__info_item flex">
                                    <p class="member__info_subtitle">2007-2009 թթ.</p>
                                    <p class="member__info_inner text-18">ԵՊՀ իրավագիտության ֆակուլտետ, մագիստրատուրա</p>
                                </li>
                                <li class="member__info_item flex">
                                    <p class="member__info_subtitle">2009-2012 թթ.</p>
                                    <p class="member__info_inner text-18">ԵՊՀ իրավագիտության ֆակուլտետ, քրեական
                                        դատավարության և կրիմինալիստիկայի ամբիոնի հայցորդ</p>
                                </li>
                            </ul>
                        </div>
                        <div class="member__info_block">
                            <p class="member__info_title text-18">Գիտական աստիճան, կոչում</p>
                            <p class="member__info_item text-18">2012 թ. իրավաբանական գիտությունների թեկնածու</p>
                        </div>
                        <div class="member__info_block">
                            <p class="member__info_title text-18">Աշխատանքային գործունեություն</p>
                            <ul class="member__info_list">
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2020 թ.-ից</p>
                                    <p class="member__info_inner text-18">ՀՀ գլխավոր դատախազի տեղակալ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2018-2020 թթ.</p>
                                    <p class="member__info_inner text-18">Երևան քաղաքի դատախազ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2016-2018 թթ.</p>
                                    <p class="member__info_inner text-18">ՀՀ գլխավոր դատախազության մեղադրանքի պաշտպանության
                                        և դատական ակտերի բողոքարկման վարչության պետ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2015-2016 թթ.</p>
                                    <p class="member__info_inner text-18">Երևան քաղաքի դատախազի տեղակալ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2014-2015 թթ.</p>
                                    <p class="member__info_inner text-18">ՀՀ գլխավոր դատախազության մեղադրանքի պաշտպանության
                                        և դատական ակտերի բողոքարկման վարչության պետի տեղակալ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2014 թ. մարտ-մայիս</p>
                                    <p class="member__info_inner text-18">ՀՀ գլխավոր դատախազության մեղադրանքի պաշտպանության
                                        և դատական ակտերի բողոքարկման վարչության ավագ դատախազ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2013-2014 թթ.</p>
                                    <p class="member__info_inner text-18">Երևան քաղաքի դատախազության դատախազ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2013 թ. մարտ-նոյեմբեր</p>
                                    <p class="member__info_inner text-18">Երևան քաղաքի Շենգավիթ վարչական շրջանի
                                        դատախազության դատախազ</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2012 թ․-ից</p>
                                    <p class="member__info_inner text-18">ՀՀ-ում Ֆրանսիական համալսարանի դասախոս (ՀՀ Քրեական
                                        դատավարություն)</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2012 թ․-ից</p>
                                    <p class="member__info_inner text-18">ՀՀ Ոստիկանության կրթահամալիրի հրավիրված դասախոս
                                        (ՀՀ Քրեական դատավարություն)</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2009-2013 թթ.</p>
                                    <p class="member__info_inner text-18">Հյուսիսային համալսարանի դասախոս (Մինչդատական
                                        վարույթի նկատմամբ դատական վերահսկողության հիմնախնդիրները)</p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2008-2013 թթ.</p>
                                    <p class="member__info_inner text-18">ՀՀ վերաքննիչ քրեական դատարանի նախագահի խորհրդական
                                    </p>
                                </li>
                                <li class="member__info_item">
                                    <p class="member__info_subtitle">2008 թ.</p>
                                    <p class="member__info_inner text-18">ՀՀ վերաքննիչ քրեական դատարանի աշխատակազմի իրավական
                                        փորձաքննությունների ծառայության կրտսեր մասնագետ</p>
                                </li>
                            </ul>
                        </div>
                        <div class="member__info_block">
                            <p class="member__info_title text-18">Այլ տեղեկություններ</p>
                            <p class="member__info_item text-18">Դասային աստիճանը՝ արդարադատության երրորդ դասի պետական
                                խորհրդական</p>
                            <p class="member__info_item text-18">ՀՀ դատախազության կոլեգիայի անդամ</p>
                            <p class="member__info_item text-18">ՀՀ դատախազության որակավորման հանձնաժողովի անդամ</p>
                            <p class="member__info_item text-18">ՀՀ իրավաբանների միության անդամ</p>
                            <p class="member__info_item text-18">«Օրինականություն» գիտագործնական և գիտամեթոդական հանդեսի
                                խմբագրական խորհրդի անդամ</p>
                            <p class="member__info_item text-18">Ամուսնացած է, ունի մեկ դուստր</p>
                        </div>
                    </div>
                    <div class="member__img">
                        <img class="img" src="/media/img/about/governing-board-members/1.png" alt="1">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
