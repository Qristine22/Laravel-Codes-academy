@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
@endsection

@section('header-bot')
    @include("includes.distance-learning.header-bot")
@endsection

@section('content')
    <main>
        <section class="learning-video section-text distance-learning">
            <div class="wrapper">
                <iframe src="https://player.vimeo.com/video/144792674?title=0&amp;byline=0&amp;portrait=0" frameborder="0" allowfullscreen="" data-mce-src="https://player.vimeo.com/video/144792674?title=0&amp;byline=0&amp;portrait=0"></iframe>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
