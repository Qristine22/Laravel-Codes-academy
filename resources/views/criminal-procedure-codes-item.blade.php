@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css">
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
                    <div class="about__dates gallery__dates">
                        <h3 class="text-20 mass-media__link">
                            <a class="about__date"
                               href="{{route('criminal-procedure-codes', ['type' => 1]) }}"> {{ __('criminal-procedure-codes.new_ra_criminal_code') }}</a>
                        </h3>
                        <h3 class="text-20 mass-media__link">
                            <a class="about__date"
                               href="{{route('criminal-procedure-codes', ['type' => 2]) }}"> {{ __('criminal-procedure-codes.new_ra_criminal_procedure_code') }}</a>
                        </h3>
                        <h3 class="text-20 mass-media__link">
                            <a class="about__date"
                               href="{{route('criminal-procedure-codes', ['type' => 3]) }}"> {{ __('criminal-procedure-codes.new_codes') }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section__min-height">
            <div class="wrapper">
                <h3 class="text-26">
                    @if($type == 1)
                        {{ __('criminal-procedure-codes.new_ra_criminal_code') }}
                    @elseif($type == 2)
                        {{ __('criminal-procedure-codes.new_ra_criminal_procedure_code') }}
                    @else
                        {{ __('criminal-procedure-codes.new_codes') }}
                    @endif
                </h3>
                <div class="gallery__cont flex gallery_video">
                    @if(@isset($criminalProcedureCodes) && !empty($criminalProcedureCodes))
                        <div class="gallery-video__item flex">
                            {!! $criminalProcedureCodes->link !!}
                            <div>
                                <br>
                                <a class="gallery__text text-20" target="_blank" href="{{Storage::url($criminalProcedureCodes->syllabus_pdf)}}">{{ $criminalProcedureCodes->{'syllabus_pdf_name_'.app()->getLocale()} }}</a>
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
    <script src="/js/pdf.js"></script>
@endsection
