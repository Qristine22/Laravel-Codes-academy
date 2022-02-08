@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="distance-learning section section-text">
            <div class="wrapper">
                <div class="section-text__cont">
                    {!! $distanceLearning->{'text_'.app()->getLocale()} !!}
                </div>
            </div>
        </section>
        <section class="section-text rector__bot">
            <div class="wrapper">
                <div class="rector__bot_cont">
                    <a class="about__link text-18" href="{{ route('distanceLearningVideo') }}">
                        ԱՄՆ Դաշնային դատական կենտրոնի միջազգային դատական կապերի գծով ղեկավարի հարցազրույցը
                        Արդարադատության ակադեմիայի հեռաուսուցման ծրագրերի և նյութերի մասին
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
