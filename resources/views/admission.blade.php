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
        <div class="admission__cont">
            <section class="section-text section-top">
                <div class="wrapper">
                    <div class="rector__cont">
                        <div class="rector__inner">
                            <p class="margin__par text-20">
                                «Արդարադատության ակադեմիայի մասին» ՀՀ օրենքի 3-րդ հոդվածի 1-ին մասի 1-ին կետի համաձայն՝
                                Ակադեմիան ի թիվս այլ գործառույթների կազմակերպում և անցկացնում է որակավորման ստուգման
                                արդյունքներով դատավորների թեկնածուների հավակնորդների, քննիչների և դատախազների
                                թեկնածությունների ցուցակներում ընդգրկված անձանց մասնագիտական պատրաստումը: Ակադեմիայում
                                մասնագիտական պատրաստում անցնելու նպատակով դատավորների թեկնածուների հավակնորդների,
                                դատախազների և քննիչների թեկնածությունների ցուցակներում ընդգրկվելու համար սահմանված է հետևյալ
                                կարգը.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-text rector__bot">
                <div class="wrapper">
                    <div class="rector__bot_cont">
                        <a class="about__link text-18" href="{{ route('judgesCandidates') }}">
                            Դատավորի թեկնածուի հավակնորդներ
                        </a>
                        <a class="about__link text-18" href="{{ route('prosecutorsCandidates') }}">Դատախազների թեկնածուներ</a>
                        <a class="about__link text-18" href="{{ route('investigatorsCandidates') }}">Քննիչների թեկնածուներ</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
