@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
@endsection

@section('header-bot')
    @include("includes.full-time-education.header-bot")
@endsection

@section('content')
    <main>
        <section class="conducting-exams section-text section-top">
            <div class="wrapper">
                <div class="conducting-exams__cont">
                    <div class="link__pdfs">
                        <a class="link__pdf flex" href="#">
                            <span class="text-18">Ակադեմիայում քննությունների անցկացման կարգ</span>
                            <div class="link__pdf_icon">
                                <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="link__pdf_span text-18">@lang('main.downloade')</span>
                            </div>
                        </a>
                        <a class="link__pdf flex" href="#">
                            <span class="text-18">
                                ՀՀ քննչական կոմիտեի քննիչների թեկնածությունների ցուցակում ընդգրկված անձանց և ՀՀ քննչական
                                կոմիտեի դեպարտամենտի պետական ծառայողների քննությունների կազմակերպման և անցկացման կարգ
                            </span>
                            <div class="link__pdf_icon">
                                <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="link__pdf_span text-18">@lang('main.downloade')</span>
                            </div>
                        </a>
                    </div>
                    <div class="conducting-exams__bot">
                        <div class="conducting-exams__vid">
                            <iframe class="conducting-exams__iframe" src="https://www.youtube.com/embed/ITLC_CeiWL0"
                                width="800" height="500" frameborder="0" allowfullscreen=""
                                data-mce-src="https://www.youtube.com/embed/ITLC_CeiWL0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
