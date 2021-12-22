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
        <section class="gallery section-text">
            <div class="wrapper">
                <div class="gallery__cont flex">
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/1.png" alt="1">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/2.png" alt="2">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/3.png" alt="3">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/4.png" alt="4">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/5.png" alt="5">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/6.png" alt="6">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/7.png" alt="7">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/8.png" alt="8">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/9.png" alt="9">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/10.png" alt="10">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/11.png" alt="11">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/12.png" alt="12">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/13.png" alt="13">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/14.png" alt="14">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                    <div class="gallery__item flex">
                        <a class="gallery__top" href="{{ route('gallerySingle') }}">
                            <img class="gallery__img img" src="/media/img/about/gallery/2.png" alt="2">
                        </a>
                        <span class="gallery__date text-20">29.11.2021</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
