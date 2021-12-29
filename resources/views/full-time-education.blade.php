@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
@endsection

@section('header-bot')
    @include("includes.full-time-education.header-bot")
@endsection

@section('content')
    <main>
        <section class="section education section-top">
            <div class="wrapper">
                <div class="education__cont">
                    <div class="dates__item dates__item-first flex">
                        <h2 class="dates__item_title">@lang('full-time-education.judiciary-training')</h2>
                        <div class="dates flex">
                            <a class="date" href="{{ route('trainingPrograms') }}">2021</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2020</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2019</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2018</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2017</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2015-2016</a>
                        </div>
                    </div>
                    <div class="dates__item flex">
                        <h2 class="dates__item_title">@lang('full-time-education.prosecutorial-training')</h2>
                        <div class="dates flex">
                            <a class="date" href="{{ route('trainingPrograms') }}">2021</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2020</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2019</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2018</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2017</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2015-2016</a>
                        </div>
                    </div>
                    <div class="dates__item flex">
                        <h2 class="dates__item_title">@lang('full-time-education.investigative-training')</h2>
                        <div class="dates flex">
                            <a class="date" href="{{ route('trainingPrograms') }}">2021</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2020</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2019</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2018</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2017</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2015-2016</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
