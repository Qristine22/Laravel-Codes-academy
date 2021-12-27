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
                    @if (!empty($governingBoardPage))
                        {!! $governingBoardPage->text_am !!}
                    @endif
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
