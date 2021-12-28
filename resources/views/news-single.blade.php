@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/response/news-response.css">
@endsection

@section('content')
    <main>
        <section class="news__home" style="background-image: url(/media/img/news/new-single.png)">
            <div class="news__home_cont">
                <div class="wrapper">
                    <h2 class="news__home_title">
                        Սեմինար՝ նվիրված դատական համակարգում կոռուպցիոն ռիսկերին,
                        կոռուպցիայի դեմ պայքարի միջազգային լավագույն փորձին
                    </h2>
                </div>
            </div>
        </section>
        <section class="new-info">
            <div class="wrapper">
                <div class="new-info__cont">
                    <span class="new-info__cont_date">10․11․2021</span>
                    <p class="text-18 new-info__text">Նոյեմբերի 5-ին Արդարադատության ակադեմիայում անցկացվեց սեմինար՝
                        «Կոռուպցիոն ռիսկերը դատական համակարգում» թեմայով: Սեմինարների այս շարքն իրականացնում է
                        Ակադեմիան՝ Միջազգային իրավական համագործակցության գերմանական հիմնադրամի (IRZ) հետ համատեղ՝
                        «Հայաստանում արդարադատության համակարգի ամրապնդում» ծրագրի շրջանակում:
                        <br>
                        <br>
                        Սեմինարը վարում էր հակակոռուպցիոն և էթիկայի հարցերով փորձագետ Դիանա Կուրպնիսը (Լատվիա):
                        Մասնակցում էին ՀՀ տարբեր ատյանների դատավորներ:
                    </p>
                </div>
            </div>
        </section>
        <section class="new-images">
            <div class="wrapper">
                <div class="new-images_cont">
                    <div class="new-images__top flex">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide new-top__img">
                                    <a href="/media/img/news/new-single1.png" target="_blank">
                                        <img class="img" src="/media/img/news/new-single1.png" alt="new-single1">
                                    </a>
                                </div>
                                <div class="swiper-slide new-top__img">
                                    <a href="/media/img/news/new-single2.png" target="_blank">
                                        <img class="img" src="/media/img/news/new-single2.png" alt="new-single2">
                                    </a>
                                </div>
                                <div class="swiper-slide new-top__img">
                                    <a href="/media/img/news/new-single3.png" target="_blank">
                                        <img class="img" src="/media/img/news/new-single3.png" alt="new-single3">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev swiper__arrow"></div>
                            <div class="swiper-button-next swiper__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @include('includes.news.last-news')
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/news.js"></script>
@endsection
