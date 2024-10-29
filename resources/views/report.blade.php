@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css?v=<?= time();?>">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main aria-label="report">
        <section class="governing__dates section-top">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <div class="about__dates flex">
                        @foreach ($reportYears as $key => $val)
                            <div class="governing__date date-12">
                                <a class="date about__date @if($year == $key)date-active @endif" href="{{ route('report', ['year' => $key]) }}" aria-label="{{ $key }}" >{{ $key }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="pdfs section-text">
            <div class="wrapper">
                <div class="pdfs__cont">
                    @foreach ($reports as $report)
                        <div>
                            <a class="report__link text-18" href="{{ Storage::url($report->pdf) }}" target="_blank" aria-label="{{ $report->{'name_'.app()->getLocale()} }}" >{{ $report->{'name_'.app()->getLocale()} }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
