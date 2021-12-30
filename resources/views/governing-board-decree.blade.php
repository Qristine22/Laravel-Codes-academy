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
                        @foreach ($governingBoardDecreesYears as $key => $val)
                            <div class="governing__date date-12">
                                <a class="date about__date @if($year == $key) date-active @endif"
                                href="{{ route('governingBoardDecree', ['year' => $key]) }}">{{ $key }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="pdfs section-text">
            <div class="wrapper">
                <div class="pdfs__cont">
                    @foreach ($governingBoardDecrees as $item)
                        <div class="pdf__item flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    {{ $item->{'info_'.app()->getLocale()} }}
                                </p>
                                <a class="pdf__link text-18" href="#">{{ $item->pdf_name }}</a>
                            </div>
                            <div class="pdf__item_icon">
                                <a href="{{ $item->pdf }}">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
