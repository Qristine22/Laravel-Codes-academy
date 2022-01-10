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
        <section class="section-text section-top">
            <div class="wrapper">
                <div class="section-text__cont">
                    @if (!empty($governingBoardPage))
                        {!! $governingBoardPage->{'text_' . app()->getLocale()} !!}
                    @endif
                </div>
            </div>
        </section>
        <section class="governing__dates">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <h2 class="dates__item_title">@lang('about.governing-board.decrees')</h2>
                    <div class="dates governing__date_items flex">
                        @foreach ($governingBoardDecreesYears as $key => $val)
                            <div class="governing__date">
                                <a class="date"
                                    href="{{ route('governingBoardDecree', ['year' => $key]) }}">{{ $key }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="members section-text">
            <div class="wrapper">
                <div class="members__cont">
                    <h2 class="members__title text-26">@lang('about.governing-board.members')</h2>
                    <div class="members__items flex">
                        @foreach ($governingBoardMembers as $item)
                            <div class="members__item">
                                <img class="img" src="{{ Storage::url($item->img) }}" alt="1">
                                <a class="members__item_cont" href="{{ route('governingBoardBiography',
                                    ['id' => $item->id]) }}">
                                    <h3 class="member__title">{{ $item->{'name_'.app()->getLocale()} }}</h3>
                                    <h4 class="member__subtitle">{{ $item->{'position_'.app()->getLocale()} }}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
