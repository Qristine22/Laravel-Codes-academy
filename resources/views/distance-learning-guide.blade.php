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
        <section class="learning-guide section-text distance-learning">
            <h2 class="text-26 learning-guide__title">Հեռաուսուցման ուղեցույց</h2>
            <div class="wrapper">
                <div class="learning-guide__cont flex">
                    <div class="courses__pdfs_item">
                        <a href="#">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/guide/1.png" alt="1">
                        </a>
                        <a href="#">
                            <span class="pdfs__item_layer"></span>
                            <span class="pdfs__item_see-all text-18">
                                <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                @lang('main.downloade')
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
