@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="section-text section-top section__min-height">
            <div class="wrapper">
                <div class="member__cont">
                    @if(@isset($person))
                        <div class="member__info" @if(count($person->imgs) == 0)style="width: 100%" @endif>
                            <h2 class="member__name">{{ $person->{'name_'.app()->getLocale()} }}</h2>

                            @if(@isset($person->position_en) || @isset($person->position_am) || @isset($person->position_ru))
                                <p class="member__position text-20">{{ $person->{'position_'.app()->getLocale()} }}</p>
                            @endif


                            {{-- academy workers hase biography in ru and en --}}
                            @if (Request::is('about/rector/*') ||
                                Request::is('about/academy-structure/*'))
                                {!! $person->{'biography_'.app()->getLocale()} !!}
                            @else
                                @if(app()->getLocale() == 'am')
                                    {!! $person->biography !!}
                                @elseif(app()->getLocale() == 'ru')
                                    <h4>Информация доступна на армянском языке.</h4>
                                @elseif(app()->getLocale() == 'en')
                                    <h4>Information is available in Armenian</h4>
                                @endif
                            @endif
                        </div>

                        @if(count($person->imgs) > 0)
                            <div class="member__img">
                                <img class="img" src="{{ Storage::url($person->imgs[0]->img) }}" alt="img">
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </section>


        {{-- biography blade for all. And rector biography hase bottom navigate --}}
        @if (Request::is('about/rector/rectors-biography') || Request::is('about/rector/former-rectors-biography'))
            @include('includes.about.rector.rector-menu')
        @endif
    </main>
@endsection
