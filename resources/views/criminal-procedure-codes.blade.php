@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css?v=<?= time(); ?>">
    {{--    <link rel="stylesheet" href="/css/response/library-response.css">--}}
    <link rel="stylesheet" href="/css/about.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/about-response.css?v=<?= time(); ?>">

@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main aria-label="criminal-procedure-codes">
        <section class="governing__dates section-top @if(empty($criminalProcedureCodes)) section__min-height @endif">
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
        @if(isset($criminalProcedureCodes) && !empty($criminalProcedureCodes))
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
                    @foreach($criminalProcedureCodes as $criminalProcedureCode)
                        <div class="mass-media__item">
                            <div class="mass-media__list">
                                <div class="mass-media__list_item">
                                    <a class="text-20 mass-media__link"
                                       href="{{route('criminal-procedure-codes', ['type' => $type, 'item'=>$criminalProcedureCode->id]) }}">{{ $criminalProcedureCode->{'text_'.app()->getLocale()} }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $criminalProcedureCodes->appends(['criminalProcedureCodes' => $criminalProcedureCodes->currentPage()])->links('includes.pagination.paginate') }}
            </section>
        @endif
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/pdf.js"></script>
@endsection
