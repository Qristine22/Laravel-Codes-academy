@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main aria-label="distance-learning">
        <section class="distance-learning section section-text">
            <div class="wrapper">
                <div class="section-text__cont">
                    @if (!empty($distanceLearning))
                        @if(!empty($distanceLearning->text_am))
                            {!! $distanceLearning->{'text_'.app()->getLocale()} !!}
                        @else
                            {!! $distanceLearning->{'syllabus_'.app()->getLocale()} !!}
                        @endif
                    @endif
                </div>
            </div>
        </section>
        <section class="section-text rector__bot">
            <div class="wrapper">
                <div class="rector__bot_cont distance__learning_videos">
                    @foreach($distancelearningVideos as $distancelearningVideo)
                        <a class="distance__learning_video_name about__link text-18"
                            aria-label="{{ $distancelearningVideo->{'name_'.app()->getLocale()} }}"
                            href="{{ route('distanceLearningVideo', ['id' => $distancelearningVideo->id]) }}">
                            {{ $distancelearningVideo->{'name_'.app()->getLocale()} }}
                        </a>
                    @endforeach
                </div>

                {{ $distancelearningVideos->links('includes.pagination.paginate') }}
            </div>
        </section>
    </main>
@endsection
