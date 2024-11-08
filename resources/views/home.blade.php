@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/home.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/home-response.css?v=<?= time(); ?>">
@endsection

@section('content')
    <main aria-label="home">
        @if (!empty($home))
            <section class="home section" style="background-image: url({{ Storage::url($home->bg) }})">
                <div class="wrapper">
                    <div class="home__cont">
                        <div class="home__inner flex">
                            <div class="home__logo">
                                <img class="home__logo_img" src="{{ Storage::url($home->logo) }}" alt="mainLogo">
                            </div>
                            <h1 class="home__title">{!! $home->{'title_' . app()->getLocale()} !!}</h1>
                        <form class="home__form" action="{{ route('search') }}" method="GET">
                            <label for="search-input">
                                <span class="sr-only">
                                    <span class="hidden">Search</span>
                                </span>
                            </label>
                            <input id="search-input" class="inp home__form_inp" name="search" type="text" placeholder="@lang('home.search')">
                            <button class="home__form_btn">
                                <img class="home__search_icon" src="/media/img/icons/search.png" alt="Icon of Searching">
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="azdararir">
                    <a href="http://www.azdararir.am" target="_blank">
                        <img class="azdararir__img" src="/media/img/home/azdararir.gif" alt="@lang('home.azdararir')">
                    </a>
                </div>
            </section>

            <section class="section rector">
                <div class="wrapper">
                    <div class="rector__cont flex">
                        <div class="rector__img">
                            <img class="img" src="{{ Storage::url($home->rectors_img) }}" alt="rector">
                        </div>
                        <div class="rector__inner">
                            {!! $home->{'rectors_word_' . app()->getLocale()} !!}
                            <img class="rector__signature" src="{{ Storage::url($home->rectors_signature) }}"
                                alt="signature">
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- last 3 news --}}
        @include('includes.news.last-news')
    </main>
@endsection
