<section class="section last-news">
    <div class="wrapper">
        <h2 class="last-news__title">@lang('news.news')</h2>
        <div class="last-news__cont">
            <div class="last-news__items flex">
                <div class="last-news__item">
                    <div class="last-news__item_top">
                        <a href="{{ route('newsSingle', ['id' => 2]) }}">
                            <img class="img news__item_img" src="/media/img/more/news1.png" alt="news1">
                        </a>
                    </div>
                    <div class="last-news__item_cont">
                        <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => 2]) }}">
                            Մեկնարկեց դատախազի թեկնածուների 2021-2022թթ. մասնագիտական պատրաստումը
                        </a>
                        <div class="read-more__cont">
                            <a class="read-more" href="{{ route('newsSingle', ['id' => 2]) }}">
                                @lang('main.read-more')    
                            </a>
                            <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                        </div>
                    </div>
                </div>
                <div class="last-news__item">
                    <div class="last-news__item_top">
                        <a href="{{ route('newsSingle', ['id' => 2]) }}">
                            <img class="img news__item_img" src="/media/img/more/news2.png" alt="news2">
                        </a>
                    </div>
                    <div class="last-news__item_cont">
                        <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => 2]) }}">
                            Սեմինար՝ նվիրված դատական համակարգում կոռուպցիոն ռիսկերին
                        </a>
                        <div class="read-more__cont">
                            <a class="read-more" href="{{ route('newsSingle', ['id' => 2]) }}">
                                @lang('main.read-more')    
                            </a>
                            <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                        </div>
                    </div>
                </div>
                <div class="last-news__item">
                    <div class="last-news__item_top">
                        <a href="{{ route('newsSingle', ['id' => 2]) }}">
                            <img class="img news__item_img" src="/media/img/more/news3.png" alt="news3">
                        </a>
                    </div>
                    <div class="last-news__item_cont">
                        <a class="last-news__item_link" href="{{ route('newsSingle', ['id' => 2]) }}">
                            Ռեկտորը Նուր-Սուլթանում մասնակցել է միջազգային կլոր-սեղան քննարկման
                        </a>
                        <div class="read-more__cont">
                            <a class="read-more" href="{{ route('newsSingle', ['id' => 2]) }}">
                                @lang('main.read-more')    
                            </a>
                            <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>