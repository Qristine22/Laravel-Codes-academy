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
        <section class="pdfs section-text">
            <div class="wrapper">
                <div class="pdfs__cont">
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">«Արդարադատության ակադեմիա» պետական ոչ առևտրային
                                կազմակերպության՝ դատախազների թեկնածությունների ցուցակում ընդգրկված անձանց մասնագիտական
                                պատրաստման 2021-2022 թվականների ուսուցման ծրագիրը հաստատելու մասին որոշում
                            </p>
                            <a class="pdf__link text-18" href="#">ՈՐՈՇՈՒՄ ԿԽ-007/21pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="pdf__item_span text-18">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">Վերաքննիչ դատարանում դատավոր նշանակվելու համար առաջխաղացման
                                ենթակա դատավորների թեկնածուների 2021 թվականի ցուցակում ընդգրկված՝ քրեական մասնագիտացման
                                բաժնի (մինչդատական քրեական վարույթի նկատմամբ դատական վերահսկողության գործերի և
                                օպերատիվ-հետախուզական միջոցառումներ իրականացնելու մասին միջնորդությունների ենթաբաժնում
                                ընդգրկված) իրավագիտության բնագավառում գիտական աստիճան ունեցող անձանց գործնական
                                հմտությունների զարգացման մասով ուսուցման կազմակերպման մասին որոշում
                            </p>
                            <a class="pdf__link text-18" href="#">ՈՐՈՇՈՒՄ ԿԽ-006/21pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="pdf__item_span text-18">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
