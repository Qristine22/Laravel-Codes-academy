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
        <section class="governing__dates section-top">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <div class="about__dates flex">
                        <div class="governing__date date-12">
                            <a class="date about__date date-active" href="#">2021</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2020</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2019</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2018</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2017</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2016</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2015</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2014</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="graduates section-text">
            <div class="wrapper">
                <div class="graduates__cont">
                    <div class="graduates__item">
                        <h3 class="members__title graduates__title text-26">Դատավորներ</h3>
                        <div class="graduates__items flex">
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/1.png" alt="1">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արուսյակ Ալեքսանյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/5.png" alt="5">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արմեն Մարուխյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/2.png" alt="2">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արտյոմ Ավետիսյան</h3>
                                    <h4 class="member__subtitle">
                                        Շիրակի մարզի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/3.png" alt="3">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արմեն Մարուխյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/4.png" alt="4">
                                <a href="{{ route('graduatesJudges') }}">
                                    <div class="members__item_cont members__item_count">
                                        <span>+12</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="graduates__item">
                        <h3 class="members__title graduates__title text-26">Դատախազներ</h3>
                        <div class="graduates__items flex">
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/1.png" alt="1">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արուսյակ Ալեքսանյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/2.png" alt="2">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արտյոմ Ավետիսյան</h3>
                                    <h4 class="member__subtitle">
                                        Շիրակի մարզի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/5.png" alt="5">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արմեն Մարուխյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/3.png" alt="3">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արմեն Մարուխյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/4.png" alt="4">
                                <a href="{{ route('graduatesProsecutors') }}">
                                    <div class="members__item_cont members__item_count">
                                        <span>+36</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="graduates__item">
                        <h3 class="members__title graduates__title text-26">Քննիչներ</h3>
                        <div class="graduates__items flex">
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/1.png" alt="1">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արուսյակ Ալեքսանյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/5.png" alt="5">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արմեն Մարուխյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/2.png" alt="2">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արտյոմ Ավետիսյան</h3>
                                    <h4 class="member__subtitle">
                                        Շիրակի մարզի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/3.png" alt="3">
                                <div class="members__item_cont">
                                    <h3 class="member__title">Արմեն Մարուխյան</h3>
                                    <h4 class="member__subtitle">
                                        Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր
                                    </h4>
                                </div>
                            </div>
                            <div class="graduate__item">
                                <img class="img" src="/media/img/about/graduates/4.png" alt="4">
                                <a href="{{ route('graduatesInvestigators') }}">
                                    <div class="members__item_cont members__item_count">
                                        <span>+25</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
