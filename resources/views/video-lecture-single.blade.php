@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css">
    <link rel="stylesheet" href="/css/response/library-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="lecture-single section section-top">
            <div class="wrapper">
                <div class="lecture__top">
                    <h3 class="lecture__title text-20">
                        <span class="lecture__strong">
                            @lang('library.video-lectures.topic')
                        </span>
                        «Ուկրաինայի դատախազության մարմիններում պետական ծառայության բարեփոխումները»
                    </h3>
                    <p class="lecture__title text-20">
                        <span class="lecture__strong">
                            @lang('library.video-lectures.lecturer')
                        </span>
                        Ուկրաինայի դատախազության ազգային ակադեմիայի դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ
                    </p>
                </div>
                <div class="lecture__cont">
                    <iframe class="lecture-single_iframe" src="https://www.youtube.com/embed/Rlb6vGChevE" frameborder="0"
                        allowfullscreen="" data-mce-src="https://www.youtube.com/embed/Rlb6vGChevE"></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
