@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/bulletin.css">
    <link rel="stylesheet" href="/css/response/bulletin-response.css">
@endsection

@section('content')
    <main>
        <section class="bulletin section-text">
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book1.png" alt="book1">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book1.png" alt="book2">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book1.png" alt="book3">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book1.png" alt="book4">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book1.png" alt="book5">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="bulletin__pdfs section-text">
            <div class="wrapper">
                <div class="link__pdfs">
                    @foreach ($bulletinInfos as $bulletinInfo)
                        <div class="link__pdf flex">
                            <a class="link__name text-18" href="{{ Storage::url($bulletinInfo->pdf) }}" target="_blank">
                                {{ $bulletinInfo->{'name_' . app()->getLocale()} }}
                            </a>
                            <a href="{{ route($downloadLink, ['pdf' => $bulletinInfo->id]) }}">
                                <div class="link__pdf_icon">
                                    <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="link__pdf_span text-18">@lang('main.download')</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/pdf.js"></script>
@endsection
