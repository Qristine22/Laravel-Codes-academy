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
        <section class="motivation section-text distance-learning">
            <div class="wrapper">
                <div class="motivation__cont flex">
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 1</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/166183816?title=0&amp;byline=0&amp;portrait=0"
                            width="640" height="352" frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/166183816?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 2</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 3</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/167875707?title=0&amp;byline=0&amp;portrait=0"
                            width="640" height="352" frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/167875707?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 4</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 5</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 6</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 7</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 8</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 9</span>
                    </div>
                    <div class="motivation__item flex">
                        <iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"
                            frameborder="0" allowfullscreen=""
                            data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>
                        <span class="motivation__item_name text-20">Դաս 10</span>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
