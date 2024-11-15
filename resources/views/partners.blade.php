@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/partners.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/partners-response.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/news.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/news-response.css?v=<?= time(); ?>">
    <style>
        .swiper__arrow{
            top: 25%
        }
    </style>
@endsection

@section('content')
    <main aria-label="parters">
        <section class=partners__section>
            <section class="section-text international__partners">
                <div class="wrapper">
                    <div class="partners__item">
                        <h2 class="partners__title">@lang('partners.international')</h2>
                    </div>
                    <div class="new-images__top flex">
                        @if (count($internationals) > 2)
                            <div class="swiper">
                                <div class="swiper-wrapper partners__wrapper">
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
                                <div class="swiper-button-prev swiper__arrow"> <span class="sr-only">prev</span> </div>
                                <div class="swiper-button-next swiper__arrow"> <span class="sr-only">next</span> </div>
                            </div>
                        @else
                            <div class="swiper">
                                <div class="swiper-wrapper partners__wrapper">
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
                                <div class="swiper-wrapper partners__wrapper">
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
                                <div class="swiper-button-prev swiper__arrow"> <span class="sr-only">prev</span> </div>
                                <div class="swiper-button-next swiper__arrow"> <span class="sr-only">next</span> </div>
                            </div>
                        @else
                            <div class="swiper">
                                <div class="swiper-wrapper partners__wrapper">
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
                                <div class="swiper-wrapper partners__wrapper">
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
                                <div class="swiper-button-prev swiper__arrow"> <span class="sr-only">prev</span> </div>
                                <div class="swiper-button-next swiper__arrow"> <span class="sr-only">next</span> </div>
                            </div>
                        @else
                            <div class="swiper">
                                <div class="swiper-wrapper partners__wrapper">
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
