@extends('layouts.main')

@section('styles')
{{--    <link rel="stylesheet" href="/css/about.css">--}}
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/response/news-response.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
@endsection

@section('content')
    <main>
        <section class="news__home" style="background-image: url({{ Storage::url($news->bg) }}">
            <div class="news__home_cont">
                <div class="wrapper">
                    <h2 class="news__home_title">
                        {{ $news->{'title_' . app()->getLocale()} }}
                    </h2>
                </div>
            </div>
        </section>
        <section class="new-info">
            <div class="wrapper">
                <div class="new-info__cont">
                    <span class="new-info__cont_date">{{ $news->date }}</span>
                    <div class="text-18 new-info__text">
                        {!! $news->{'description_' . app()->getLocale()} !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="new-images">
            <div class="wrapper">
                <div class="new-images_cont">
                    <div class="new-images__top gallery__cont flex">
                    @if (count($imgs) > 2)
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($imgs as $img)
                                        <div class="swiper-slide new-top__img">
                                            <div class="gallery__item flex">
                                                <a class="gallery__top" data-fancybox="gallery"
                                                   href="{{ Storage::url($img->img) }}">
                                                    <img class="gallery__img img" src="{{ Storage::url($img->img) }}"
                                                         alt="1">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev swiper__arrow"></div>

                                <div class="swiper-button-next swiper__arrow"></div>
                            </div>
                       @elseif (count($imgs) == 2)
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($imgs as $img)
                                        <div class="swiper-slide mx-2 new-top__img">
                                            <div class="gallery__item flex">
                                                <a class="gallery__top" data-fancybox="gallery"
                                                   href="{{ Storage::url($img->img) }}">
                                                    <img class="gallery__img img" src="{{ Storage::url($img->img) }}"
                                                         alt="1">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev swiper__arrow"></div>

                                <div class="swiper-button-next swiper__arrow"></div>
                            </div>
                        @else
                            @foreach ($imgs as $img)
                                <div class="new-top__imgs">
                                    <div class="new-top__img mx-auto">
                                        <div class="gallery__item">
                                            <a class="gallery__top" data-fancybox="gallery"
                                               href="{{ Storage::url($img->img) }}">
                                                <img class="gallery__img img" src="{{ Storage::url($img->img) }}"
                                                     alt="1">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    @if (count($imgs) > 2)
    <script>
        let mySwiper = new Swiper('.swiper', {
            slidesPerView: 3,
            direction: 'horizontal',

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                601: {
                    slidesPerView: 3,
                }
            }
        });
        setInterval(function () {
            let url = document.URL
            if (url.includes('gallery')) {
                let item = url.split('-')[1] * 1
                mySwiper.slideTo(item, true, true);
            }
        }, 500)
    </script>
    @endif
@endsection
