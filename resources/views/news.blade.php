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
                            <a href="{{ route('newsSingle', ['id' => $item->id]) }}" aria-label="{{ $item->{'title_'.app()->getLocale()} }}">
                                <div class="new flex">
                                    <div class="news__img">
                                            <img class="img news__item_img" src="{{ Storage::url($item->bg) }}"  alt="Image for {{ $item->{'title_'.app()->getLocale()} }}">
                                    </div>
                                    <div class="new__inner">
                                        <span class="new__date text-20">{{ $item->date }}</span>
                                        <h2 class="new__title">
                                            <p>
                                                {{ $item->{'title_'.app()->getLocale()} }}
                                            </p>
                                        </h2>
                                         <div class="new__subtitle">
                                             <p  class="new__subtitle-content">
                                                {!! $item->{'description_'.app()->getLocale()} !!}
                                            </p>
                                         </div>
                                        <div class="new__bot">
                                            <div class="read-more__cont news__read-more__cont">
                                                <p class="read-more new__read-more">
                                                  @lang('main.read-more')
                                                </p>
                                                <img class="read-more__arrow" src="/media/img/icons/longArrow.png"
                                                     alt="longArrow">
                                              </div>
                                            </div>
                                      </div>
                                  </div>
                            </a>
                        </div>
                    @endforeach
                    </div>

                    {{ $news->links('includes.pagination.paginate') }}
                </div>
            </div>
        </section>
    </main>
@endsection
