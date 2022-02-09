@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
@endsection

@section('header-bot')
    @if (Request::is('library/*'))
        @include("includes.header-bot")
    @else
        @include("includes.header-bot")
    @endif
@endsection

@section('content')
    <main>
        <section class="section-text section-top section__min-height">
            <div class="wrapper">
                <div class="conducting-exams__cont">
                    <div class="link__pdfs">
                        @if(@isset($data) && count($data))
                            @foreach($data as $item)
                                <div class="link__pdf flex">
                                    <a class="link__name text-18" href="{{ Storage::url($item->pdf) }}" target="_blank">{{ $item->{'name_'.app()->getLocale()} }}</a>
                                    <a href="#">
                                        <div class="link__pdf_icon">
                                            <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                            <span class="link__pdf_span text-18">@lang('main.download')</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection