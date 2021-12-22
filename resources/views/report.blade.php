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
                        <div class="governing__date date-12">
                            <a class="date about__date date-active" href="#">2020</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2019</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2018</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2017</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2016</a>
                        </div>
                        <div class="governing__date date-12">
                            <a class="date about__date" href="#">2015</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pdfs section-text">
            <div class="wrapper">
                <div class="pdfs__cont">
                    <a class="report__link text-18" href="#">Հաշվետվություն</a>
                </div>
            </div>
        </section>
    </main>
@endsection
