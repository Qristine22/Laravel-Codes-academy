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
                <div class="section-text__cont">
                    <p class="margin__par text-18">
                        Ակադեմիայի կառավարումն իրականացնում է Ակադեմիայի կառավարման խորհուրդը՝
                        «Արդարադատության ակադեմիայի մասին ՀՀ օրենքով նախատեսված կարգով։
                    </p>
                    <p class="margin__par text-18">
                        Խորհուրդը բաղկացած է յոթ անդամից, որի կազմում են`
                    </p>
                    <ol class="margin__par info__list">
                        <li class="info__item">
                            <p class="text-18">արդարադատության նախարարը կամ նրա նշանակմամբ՝ իր տեղակալը,</p>
                        </li>
                        <li class="info__item">
                            <p class="text-18">երեք դատախազ, որոնց նշանակում է ՀՀ գլխավոր դատախազը,</p>
                        </li>
                        <li class="info__item">
                            <p class="text-18">երեք դատավոր, որոնց նշանակում է ՀՀ դատավորների ընդհանուր ժողովը՝
                                քաղաքացիական, քրեական և վարչական մասնագիտացմամբ դատավորների ներկայացվածությամբ:
                            </p>
                        </li>
                    </ol>
                    <p class="margin__par text-18">
                        Խորհրդի անդամները, բացառությամբ արդարադատության նախարարի կամ նրա նշանակմամբ՝ իր
                        տեղակալի, նշանակվում են չորս տարի ժամկետով: Եթե Խորհրդի դատավոր կամ դատախազ անդամի
                        լիազորությունները վաղաժամկետ դադարում են, ապա նոր անդամը նշանակվում է նախկին անդամի
                        լիազորությունների ժամկետի ավարտին մնացած ժամկետով։
                    </p>
                    <p class="margin__par text-18">
                        Խորհրդի դատավոր կամ դատախազ անդամները չեն կարող ավելի քան երկու անգամ անընդմեջ նշանակվել Խորհրդի
                        անդամ:
                    </p>
                    <p class="margin__par text-18">
                        Խորհրդի նախագահն ընտրվում է Խորհրդի կազմից` նրա անդամների ձայների մեծամասնությամբ, գաղտնի
                        քվեարկությամբ, դատախազ և դատավոր անդամների միջև ռոտացիոն կարգով: Արդարադատության նախարարը (նրա
                        նշանակմամբ՝ իր տեղակալը) չի կարող ընտրվել Խորհրդի նախագահ։
                    </p>
                    <p class="margin__par text-18">
                        Խորհրդի նախագահն ընտրվում է մեկ տարի ժամկետով, իսկ եթե նրա` որպես Խորհրդի անդամի
                        լիազորությունների ժամկետի ավարտին մնացել է մեկ տարուց պակաս, ապա այդ ժամկետով։
                    </p>
                    <p class="margin__par text-18">
                        Խորհրդի անդամներն իրենց պարտականությունները կատարում են հասարակական հիմունքներով։
                    </p>
                </div>
            </div>
        </section>
        <section class="governing__dates">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <h2 class="dates__item_title">Դատական համակարգի ունկնդիրների ուսուցում</h2>
                    <div class="dates governing__date_items flex">
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2021</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2020</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2019</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2018</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2017</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2016</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2015</a>
                        </div>
                        <div class="governing__date">
                            <a class="date" href="{{ route('listenersTraining') }}">2014</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="members section-text">
            <div class="wrapper">
                <div class="members__cont">
                    <h2 class="members__title text-26">Ակադեմիայի կառավաման խորհրդի կազմը</h2>
                    <div class="members__items flex">
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/1.png" alt="1">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Գեվորգ Բաղդասարյան</h3>
                                <h4 class="member__subtitle">ՀՀ գլխավոր դատախազի տեղակալ (Խորհրդի նախագահ)</h4>
                            </a>
                        </div>
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/2.png" alt="2">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Եղիազար Ավագյան</h3>
                                <h4 class="member__subtitle">ՀՀ գլխավոր դատախազության միջազգային-իրավական
                                    համագոր-ծակցության վարչության պետ</h4>
                            </a>
                        </div>
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/3.png" alt="3">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Արմեն Մարուխյան</h3>
                                <h4 class="member__subtitle">ՀՀ գլխավոր դատախազության կազմակերպական-վերահսկողական և
                                    իրավական ապահովման վարչության պետ</h4>
                            </a>
                        </div>
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/4.png" alt="4">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Անդրանիկ Մնացականյան</h3>
                                <h4 class="member__subtitle">ՀՀ գլխավոր դատախազի տեղակալ (Խորհրդի նախագահ)</h4>
                            </a>
                        </div>
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/5.png" alt="5">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Արման Թովմասյան</h3>
                                <h4 class="member__subtitle">ՀՀ վերաքննիչ վարչական դատարանի դատավոր</h4>
                            </a>
                        </div>
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/6.png" alt="6">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Երեմ Եսոյան</h3>
                                <h4 class="member__subtitle">Երևան քաղաքի ընդհանուր իրավասության դատարանի դատավոր</h4>
                            </a>
                        </div>
                        <div class="members__item">
                            <img class="img" src="/media/img/about/governing-board-members/7.png" alt="7">
                            <a class="members__item_cont" href="{{ route('biography') }}">
                                <h3 class="member__title">Երանուհի Թումանյանց</h3>
                                <h4 class="member__subtitle">ՀՀ արդարադատության նախարարի տեղակալ</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
