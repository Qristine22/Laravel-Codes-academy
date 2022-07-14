@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/partners.css">
    <link rel="stylesheet" href="/css/response/partners-response.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/response/news-response.css">
    <style>
        .swiper__arrow{
            top: 25%
        }
    </style>
@endsection

@section('content')
    <main>
        <section class="partners section-text">
            <div class="wrapper">
                <div class="partners__item">
                    <h2 class="partners__title">@lang('partners.international')</h2>
                </div>
                <div class="new-images__top flex">
                    @if (count($internationals) > 2)
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($internationals as $international)
                                    <div class="swiper-slide new-top__img partner__item">
                                        <a class="partners__link"
                                           href="{{ route('partnerSingle', ['id' => $international->id]) }}">
                                            <img class="partner__img img" src="{{ Storage::url($international->logo) }}"
                                                 alt="{{$international->id}}">
                                        </a>
                                        <h3 class="partner__name">{{ $international->{'name_'.app()->getLocale()} }}</h3>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev swiper__arrow"></div>
                            <div class="swiper-button-next swiper__arrow"></div>
                        </div>
                    @else
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($internationals as $international)
                                    <div class="swiper-slide new-top__img partner__item">
                                        <a class="partners__link"
                                           href="{{ route('partnerSingle', ['id' => $international->id]) }}">
                                            <img class="partner__img img" src="{{ Storage::url($international->logo) }}"
                                                 alt="{{$international->id}}">
                                        </a>
                                        <h3 class="partner__name">{{ $international->{'name_'.app()->getLocale()} }}</h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <section class="section-text">
            <div class="wrapper">
                <div class="partners__item">
                    <h2 class="partners__title">@lang('partners.foreign')</h2>
                </div>
                <div class="new-images__top flex">
                    @if (count($foreigns) > 5)
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($foreigns as $foreign)
                                    <div class="swiper-slide partner__item">
                                        <a class="partners__link"
                                           href="{{ route('partnerSingle', ['id' => $foreign->id]) }}">
                                            <img class="partner__img img" src="{{ Storage::url($foreign->logo) }}"
                                                 alt="{{$foreign->id}}">
                                        </a>
                                        <h3 class="partner__name">{{ $foreign->{'name_'.app()->getLocale()} }}</h3>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev swiper__arrow"></div>
                            <div class="swiper-button-next swiper__arrow"></div>
                        </div>
                    @else
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($foreigns as $foreign)
                                    <div class="swiper-slide partner__item">
                                        <a class="partners__link"
                                           href="{{ route('partnerSingle', ['id' => $foreign->id]) }}">
                                            <img class="partner__img img" src="{{ Storage::url($foreign->logo) }}"
                                                 alt="{{$foreign->id}}">
                                        </a>
                                        <h3 class="partner__name">{{ $foreign->{'name_'.app()->getLocale()} }}</h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <section class="section-text">
            <div class="wrapper">
                <div class="partners__item">
                    <h2 class="partners__title">@lang('partners.arm&artsakh')</h2>
                </div>
                <div class="new-images__top flex">
                    @if (count($armArtsakhs) > 2)
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($armArtsakhs as $armArtsakh)
                                    <div class="swiper-slide new-top__img partner__item">
                                        <a class="partners__link"
                                           href="{{ route('partnerSingle', ['id' => $armArtsakh->id]) }}">
                                            <img class="partner__img img" src="{{ Storage::url($armArtsakh->logo) }}"
                                                 alt="{{$armArtsakh->id}}">
                                        </a>
                                        <h3 class="partner__name">{{ $armArtsakh->{'name_'.app()->getLocale()} }}</h3>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev swiper__arrow"></div>
                            <div class="swiper-button-next swiper__arrow"></div>
                        </div>
                    @else
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($armArtsakhs as $armArtsakh)
                                    <div class="swiper-slide partner__item">
                                        <a class="partners__link"
                                           href="{{ route('partnerSingle', ['id' => $armArtsakh->id]) }}">
                                            <img class="partner__img img" src="{{ Storage::url($armArtsakh->logo) }}"
                                                 alt="{{$armArtsakh->id}}">
                                        </a>
                                        <h3 class="partner__name">{{ $armArtsakh->{'name_'.app()->getLocale()} }}</h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
@section('scripts')
    <script src="/js/swiper.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 5,
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
                    slidesPerView: 5,
                }
            }
        });
        setTimeout(function () {
            let next = document.getElementsByClassName('swiper-button-next')
            for (const nextElement of next) {
                nextElement.classList.remove("swiper-button-disabled");
            }
        }, 100);
    </script>
@endsection
