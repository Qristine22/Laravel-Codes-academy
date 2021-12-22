@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
@endsection

@section('header-bot')
    @if (Request::is('library/*'))
        @include("includes.library.header-bot")
    @else
        @include("includes.full-time-education.header-bot")
    @endif
@endsection

@section('content')
    <main>
        <section class="pdf-downloade section-text section-top">
            <div class="wrapper">
                <div class="conducting-exams__cont">
                    <div class="link__pdfs">
                        <a class="link__pdf flex" href="#">
                            <span class="text-18">Հայալեզու գրքերի ցանկ</span>
                            <div class="link__pdf_icon">
                                <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="link__pdf_span text-18">Ներբեռնել</span>
                            </div>
                        </a>
                        <a class="link__pdf flex" href="#">
                            <span class="text-18">Օտարալեզու գրքերի ցանկ</span>
                            <div class="link__pdf_icon">
                                <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="link__pdf_span text-18">Ներբեռնել</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
