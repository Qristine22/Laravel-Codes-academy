@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/about-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main aria-label="rectors-decrees">
        <section class="pdfs section-text section-top">
            <div class="wrapper">
                <h2 class="pdfs__title">@lang('about.rector.decrees')</h2>
                <div class="pdfs__cont flex">
                    @foreach ($decrees as $item)

                        {{-- component path  about/decree --}}
                        <x-about.decree :item=$item>
                            <a href="{{ route('rectorsDecreedownload', ['pdf' => $item->id]) }}" aria-label="{{$item -> id}}">
                                <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="pdf__item_span text-18">
                                    @lang('main.download')
                                </span>
                            </a>
                        </x-about.decree>
                    @endforeach

                    {{-- pagination --}}
                    {{ $decrees->links('includes.pagination.paginate') }}
                </div>
            </div>
        </section>

        @include('includes.about.rector.rector-menu')
    </main>
@endsection
