@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main aria-label="training-programs">
        <section class="section education section-top">
            <div class="wrapper">
                <div class="education__cont">
                    <div class="dates__item dates__item-first flex">
                        <h2 class="dates__item_title">@lang('full-time-education.judiciary-training')</h2>
                        <div class="dates flex">
                            @foreach($trainingProgramJodgeYears as $key => $val)
                                <a class="date"
                                   aria-label="{{$key.'a'}}"
                                    href="{{ route('trainingProgramSingle', ['year' => $key, 'category' => 'judge']) }}">
                                    {{ $key }}

                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="dates__item flex">
                        <h2 class="dates__item_title">@lang('full-time-education.prosecutorial-training')</h2>
                        <div class="dates flex">
                            @foreach($trainingProgramProsecutorYears as $key => $val)
                                <a class="date"
                                   aria-label="{{$key.'b'}}"
                                    href="{{ route('trainingProgramSingle', ['year' => $key, 'category' => 'prosecutor']) }}">
                                    {{ $key }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="dates__item flex">
                        <h2 class="dates__item_title">@lang('full-time-education.investigative-training')</h2>
                        <div class="dates flex">
                            @foreach($trainingProgramInvestigatorYears as $key => $val)
                                <a class="date"
                                    aria-label="{{$key.'c'}}"
                                    href="{{ route('trainingProgramSingle',
                                        ['year' => $key, 'category' => 'investigator']) }}">
                                    {{ $key }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
