@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
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
                                @if(app()->getLocale() == 'am')
                                    <a class="pdf__link text-18" href="{{ Storage::url($item->pdf) }}" target="_blank">
                                        {{ $item->pdf_name }}
                                    </a>
                                @elseif(app()->getLocale() == 'ru')
                                    <span class="pdf__link text-18">Информация доступна на армянском языке.</span>
                                @elseif(app()->getLocale() == 'en')
                                    <span class="pdf__link text-18">Information is available in Armenian</span>
                                @endif
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
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
