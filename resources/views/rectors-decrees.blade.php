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
        <section class="pdfs section-text section-top">
            <div class="wrapper">
                <h3 class="pdfs__title">@lang('about.rector.decrees')</h3>
                <div class="pdfs__cont flex">
                    @foreach ($decrees as $decree)

                        {{-- component path  about/decree --}}
                        <x-about.decree :item=$decree />
                    @endforeach

                    {{-- pagination --}}
                    {{ $decrees->links('includes.pagination.paginate') }}
                </div>
            </div>
        </section>

        @include('includes.about.rector.rector-menu')
    </main>
@endsection
