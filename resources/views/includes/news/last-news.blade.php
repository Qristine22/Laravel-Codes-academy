<section class="section last-news">
    <div class="wrapper">
        <h2 class="last-news__title">@lang('news.news')</h2>
        <div class="last-news__cont">
            <div class="last-news__items flex">
                @foreach($lastNews as $item)
                    <div class="last-news__item">
                        <a href="{{ route('newsSingle', ['id' => $item->id]) }}" aria-label="{{ $item->id }}">
                            <div class="last-news__item_top">
                                <div>
                                    <img class="img news__item_img" src="{{ Storage::url($item->bg) }}" alt="{{ $item->id }}">
                                </div>
                            </div>
                            <div class="last-news__item_cont">
                                <p class="last-news__item_link">
                                    {{ $item->{'title_'.app()->getLocale()} }}
                                </p>
                                <div class="read-more__cont">
                                    <p class="read-more">
                                        @lang('main.read-more')
                                    </p>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="Arrow Icon">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
