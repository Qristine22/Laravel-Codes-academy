@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main aria-label="conducting-exams">
        <section class="conducting-exams section-text section-top section__min-height">
            <div class="wrapper">
                <div class="conducting-exams__cont">
                    <div class="link__pdfs">
                        @foreach($conductingExams as $conductingExam)
                            <div class="link__pdf flex">
                                <a class="link__name text-18" href="{{ Storage::url($conductingExam->pdf) }}" target="_blank" aria-label=" {{ $conductingExam->{'name_'.app()->getLocale()} }}">
                                    {{ $conductingExam->{'name_'.app()->getLocale()} }}
                                </a>
                                <a href="{{ route('conductingExamDownload', ['pdf' => $conductingExam->id]) }}" aria-label="{{ $conductingExam->id}}">
                                    <div class="link__pdf_icon">
                                        <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                        <span class="link__pdf_span text-18">@lang('main.download')</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="conducting-exams__bot">
                        @if(!@empty($conductingExamVideos))
                            @foreach($conductingExamVideos as $conductingExamVideo)
                                <div class="conducting-exams__vid">
                                    {!! $conductingExamVideo->video !!}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
