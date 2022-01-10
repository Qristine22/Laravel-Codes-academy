@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main>
        <section class="gallery-single section-text section-top">
            <div class="wrapper">
                <h3 class="text-26">22․02․2021</h3>
                <div class="gallery-single__cont">
                    <div class="gallery-single_item flex">
                        <img class="gallery__img img" src="/media/img/about/gallery/2.png" alt="2">
                    </div>
                    <div class="gallery-single_item flex">
                        <img class="gallery__img img" src="/media/img/about/gallery/15.png" alt="15">
                    </div>
                    <div class="gallery-single_item flex">
                        <img class="gallery__img img" src="/media/img/about/gallery/16.png" alt="16">
                    </div>
                    <div class="gallery-single_item flex">
                        <img class="gallery__img img" src="/media/img/about/gallery/17.png" alt="17">
                    </div>
                    <div class="gallery-single_item flex">
                        <img class="gallery__img img" src="/media/img/about/gallery/18.png" alt="18">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
