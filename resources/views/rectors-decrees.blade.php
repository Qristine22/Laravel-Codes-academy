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
        <section class="pdfs section-text section-top">
            <div class="wrapper">
                <h3 class="pdfs__title">Ռեկտորի հրամանները</h3>
                <div class="pdfs__cont flex">
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">
                                «Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության գիտական խորհրդի
                                կանոնակարգում փոփոխություններ կատարելու մասին
                            </p>
                            <a class="pdf__link text-18" href="#">ՀՐԱՄԱՆ ԹԻՎ 031/2020.pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="img" src="/media/img/icons/pdf.png" alt="pdf">
                            </a>
                        </div>
                    </div>
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">
                                «Բանբեր արդարադատության ակադեմիայի» գիտագործնական հանդեսի խմբագրական խորհրդի կազմում
                                փոփոխություններ կատարելու մասին
                            </p>
                            <a class="pdf__link text-18" href="#">ՀՐԱՄԱՆ ԹԻՎ 018/2020-Ա.pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="img" src="/media/img/icons/pdf.png" alt="pdf">
                            </a>
                        </div>
                    </div>
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">
                                «Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության գիտական խորհրդի
                                կանոնակարգը և անվանական կազմը հաստատելու մասին
                            </p>
                            <a class="pdf__link text-18" href="#">ՀՐԱՄԱՆ ԹԻՎ 062/1-2019.pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="img" src="/media/img/icons/pdf.png" alt="pdf">
                            </a>
                        </div>
                    </div>
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">
                                Քննչական կոմիտեի ծառայողների թեկնածությունների 2019 թ. ցուցակում ընդգրկված անձանց 2-րդ
                                խմբի բաշխումն ըստ փորձաշրջանի ղեկավարների կատարելու և փորձաշրջանի անհատական ծրագիրը
                                հաստատելու մասին
                            </p>
                            <a class="pdf__link text-18" href="#">ՀՐԱՄԱՆ ԹԻՎ 049/2019-Ա.pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="img" src="/media/img/icons/pdf.png" alt="pdf">
                            </a>
                        </div>
                    </div>
                    <div class="pdf__item flex">
                        <div class="pdf__item_cont">
                            <p class="pdf__name text-18">
                                Դատախազների թեկնածությունների 2019 թ. ցուցակում ընդգրկված անձանց բաշխումն ըստ
                                փորձաշրջանի ղեկավարների կատարելու և փորձաշրջանի անհատական ծրագիրը հաստատելու մասին
                            </p>
                            <a class="pdf__link text-18" href="#">ՀՐԱՄԱՆ ԹԻՎ 047/2019-Ա.pdf</a>
                        </div>
                        <div class="pdf__item_icon">
                            <a href="#">
                                <img class="img" src="/media/img/icons/pdf.png" alt="pdf">
                            </a>
                        </div>
                    </div>
                    <div class="pagination news__pagination flex">
                        <a class="pagination__link" href="#">
                            <img class="img pagination__icon" src="/media/img/icons/firstPage.png" alt="firstPage">
                        </a>
                        <a class="pagination__link" href="#">
                            <img class="img pagination__icon" src="/media/img/icons/previousPage.png" alt="previousPage">
                        </a>
                        <div class="pagination__pages">
                            <a class="pagination__num pagination__current" href="#">1</a>
                            <a class="pagination__num pagination__divide" href="#">/</a>
                            <a class="pagination__num pagination__last" href="#">133</a>
                        </div>
                        <a class="pagination__link" href="#">
                            <img class="img pagination__icon" src="/media/img/icons/nextPage.png" alt="nextPage">
                        </a>
                        <a class="pagination__link" href="#">
                            <img class="img pagination__icon" src="/media/img/icons/lastPage.png" alt="lastPage">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-text rector__bot">
            <div class="wrapper">
                <div class="rector__bot_cont">
                    <a class="about__link text-18 about__link-active" href="{{ route('rectorsDecrees') }}">
                        Ռեկտորի հրամանները
                    </a>
                    <a class="about__link text-18" href="{{ route('rectorsBiography') }}">Ռեկտորի կենսագրություն</a>
                    <a class="about__link text-18" href="{{ route('formerRectorsBiography') }}">Ակադեմիայի նախկին Ռեկտոր</a>
                </div>
            </div>
        </section>
    </main>
@endsection
