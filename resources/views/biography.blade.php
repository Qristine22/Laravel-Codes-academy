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
        <section class="section-text section-top">
            <div class="wrapper">
                <div class="member__cont">
                    <div class="member__info">
                        <h2 class="member__name">{{ $person->{'name_'.app()->getLocale()} }}</h2>
                        <p class="member__position text-20">{{ $person->{'position_'.app()->getLocale()} }}</p>
                        {!! $person->biography_am !!}
                    </div>
                    <div class="member__img">
                        <img class="img" src="{{ Storage::url($person->img) }}" alt="1">
                    </div>
                </div>
            </div>
        </section>


        {{-- biography blade for all. In rector biography hase bottom navigate --}}
        @if (Request::is('about/rectors-biography') || Request::is('about/former-rectors-biography'))
            @include('includes.about.rector.rector-menu')
        @endif
    </main>
@endsection
