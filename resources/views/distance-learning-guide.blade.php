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
        <section class="learning-guide section-text section-top">
            <h2 class="text-26 learning-guide__title">Հեռաուսուցման ուղեցույց</h2>
            <div class="wrapper">
                <div class="learning-guide__cont flex">
                    <div class="learning-guide__img">
                        <a href="#">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/guide/1.png" alt="1">
                        </a>
                    </div>
                    <div class="pdf__download_cont">
                        <a class="pdf__download flex" href="#">
                            <img class="pdf__download_img" src="\media\img\icons\pdf.png" alt="pdf">
                            <span class="pdf__download_layer text-18">Ներբեռնել</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
