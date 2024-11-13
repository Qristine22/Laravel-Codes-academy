@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/news.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/news-response.css?v=<?= time(); ?>">
@endsection

@section('content')
    <main aria-label="news">
        <section class="section news__section">
            <div class="wrapper">
                <div class="news__cont flex">
                    @foreach($news as $item)
                        <div class="new flex">
                            <div class="news__img">
                                <p>
                                    <img class="img news__item_img" src="{{ Storage::url($item->bg) }}" alt="{{ $item->id }}">
                                </p>
                            </div>
                            <div class="new__inner">
                                <span class="new__date text-20">{{ $item->date }}</span>
                                <h3 class="new__title">
                                    <p>
                                        {{ $item->{'title_'.app()->getLocale()} }}
                                    </p>
                                </h3>
                                <div class="new__subtitle">
                                    <p>
                                        {!! $item->{'description_'.app()->getLocale()} !!}
                                    </p>
                                </div>
                                <div class="new__bot">
                                    <div class="read-more__cont news__read-more__cont">
                                        <a class="read-more new__read-more"
                                            aria-label="{{$item->id}}"
                                            href="{{ route('newsSingle', ['id' => $item->id]) }}">
                                            @lang('main.read-more')
                                        <img class="read-more__arrow" src="/media/img/icons/longArrow.png"
                                            alt="longArrow">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    {{ $news->links('includes.pagination.paginate') }}
                </div>
            </div>
        </section>
    </main>
@endsection
