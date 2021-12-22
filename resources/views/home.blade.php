@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/response/home-response.css">
@endsection

@section('content')
    <main>
        <section class="home section">
            <div class="wrapper">
                <div class="home__cont">
                    <div class="home__inner flex">
                        <div class="home__logo">
                            <img class="home__logo_img" src="/media/img/logo/mainLogo.png" alt="mainLogo">
                        </div>
                        <h1 class="home__title">հայաստանի Հանրապետություն
                            Արդարադատության ակադեմիա</h1>
                        <form class="home__form" action="#" method="POST">
                            <img class="home__search_icon" src="/media/img/icons/search.png" alt="search">
                            <input class="inp home__form_inp" type="text" placeholder="Որոնում...">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section rector">
            <div class="wrapper">
                <div class="rector__cont flex">
                    <div class="rector__img">
                        <img class="img" src="/media/img/more/rector.png" alt="rector">
                    </div>
                    <div class="rector__inner">
                        <h2 class="rector__title">Հարգելի՛ գործընկեր,</h2>
                        <p class="rector__word">Արդարադատության ակադեմիայի գործունեության հիմնական ուղղությունների
                            կապակցությամբ բաց երկխոսություն ապահովելու նպատակով ստեղծվել է համապատասխան էլեկտրոնային
                            հարթակ, որում Դուք կարող եք ստանալ Ձեզ հուզող բոլոր հարցերի պատասխանները:</p>
                        <div class="rector__bot flex">
                            <h3 class="rector__title rector__bot_title">Ռեկտոր</h3>
                            <img class="rector__signature" src="/media/img/more/signature.png" alt="signature">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section last-news">
            <div class="wrapper">
                <h2 class="last-news__title">Նորություններ</h2>
                <div class="last-news__cont">
                    <div class="last-news__items flex">
                        <div class="last-news__item">
                            <div class="last-news__item_top">
                                <a href="{{ route('newsSingle', ['id' => 2]) }}">
                                    <img class="img news__item_img" src="/media/img/more/news1.png" alt="news1">
                                </a>
                            </div>
                            <div class="last-news__item_cont">
                                <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => 2]) }}">
                                    Մեկնարկեց դատախազի թեկնածուների 2021-2022թթ. մասնագիտական պատրաստումը
                                </a>
                                <div class="read-more__cont">
                                    <a class="read-more" href="{{ route('newsSingle', ['id' => 2]) }}">Կարդալ ավելին</a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                        <div class="last-news__item">
                            <div class="last-news__item_top">
                                <a href="{{ route('newsSingle', ['id' => 2]) }}">
                                    <img class="img news__item_img" src="/media/img/more/news2.png" alt="news2">
                                </a>
                            </div>
                            <div class="last-news__item_cont">
                                <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => 2]) }}">
                                    Սեմինար՝ նվիրված դատական համակարգում կոռուպցիոն ռիսկերին
                                </a>
                                <div class="read-more__cont">
                                    <a class="read-more" href="{{ route('newsSingle', ['id' => 2]) }}">Կարդալ ավելին</a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                        <div class="last-news__item">
                            <div class="last-news__item_top">
                                <a href="{{ route('newsSingle', ['id' => 2]) }}">
                                    <img class="img news__item_img" src="/media/img/more/news3.png" alt="news3">
                                </a>
                            </div>
                            <div class="last-news__item_cont">
                                <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => 2]) }}">
                                    Ռեկտորը Նուր-Սուլթանում մասնակցել է միջազգային կլոր-սեղան քննարկման
                                </a>
                                <div class="read-more__cont">
                                    <a class="read-more" href="{{ route('newsSingle', ['id' => 2]) }}">Կարդալ ավելին</a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
