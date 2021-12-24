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
        <section class="section section-text section-top">
            <div class="wrapper">
                <div class="section-text__cont">
                    {!! $about->about_am !!}
                </div>
            </div>
        </section>
    </main>
@endsection
