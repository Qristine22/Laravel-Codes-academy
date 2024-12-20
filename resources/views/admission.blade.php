@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/about-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main aria-label="admission" >
        <div class="admission__cont">
            <section class="section-text section-top">
                <div class="wrapper">
                    <div class="rector__cont">
                        <div class="rector__inner section-text__cont">
                            {!! $admission->{'text_'.app()->getLocale()} !!}
                        </div>
                    </div>
                </div>
            </section>

            @include('includes.about.admission.admission-menu')
        </div>
    </main>
@endsection
