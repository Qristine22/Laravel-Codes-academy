@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/library-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main aria-label="video-lecture-single">
        <section class="lecture-single section section-top">
            <div class="wrapper">
                <div class="lecture__top">
                    <h2 class="lecture__title text-20">
                        <span class="lecture__strong">
                            @lang('library.video-lectures.topic')
                        </span>
                        {{ $videoLecture->{'topic_' . app()->getLocale()} }}
                    </h2>
                    <p class="lecture__title text-20">
                        <span class="lecture__strong">
                            @lang('library.video-lectures.lecturer')
                        </span>
                        {{ $videoLecture->{'lecturer_' . app()->getLocale()} }}
                    </p>
                </div>
                <div class="lecture__cont">
                    {!! $videoLecture->video !!}
                </div>
            </div>
        </section>
    </main>
@endsection
