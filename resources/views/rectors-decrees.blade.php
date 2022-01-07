@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.about.header-bot")
@endsection

@section('content')
    <main>
        <section class="pdfs section-text section-top">
            <div class="wrapper">
                <h3 class="pdfs__title">Ռեկտորի հրամանները</h3>
                <div class="pdfs__cont flex">
                    @foreach ($decrees as $decree)
                        <div class="pdf__item flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    {{ $decree->{'text_' . app()->getLocale()} }}
                                </p>
                                @if (app()->getLocale() == 'am')
                                    <a class="pdf__link text-18" target="_blank" href="{{ Storage::url($decree->pdf) }}">
                                        {{ $decree->pdf_name }}
                                    </a>
                                @elseif(app()->getLocale() == 'en')
                                    <a class="pdf__link text-18" target="_blank">
                                        Information is available in Armenian
                                    </a>
                                @elseif(app()->getLocale() == 'ru')
                                    <a class="pdf__link text-18" target="_blank">
                                        Информация доступна на армянском языке
                                    </a>
                                @endif
                            </div>
                            <div class="pdf__item_icon">
                                <a href="#">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    {{-- pagination --}}
                    {{ $decrees->links('includes.pagination.paginate') }}
                </div>
            </div>
        </section>

        @include('includes.about.rector.rector-menu')
    </main>
@endsection
