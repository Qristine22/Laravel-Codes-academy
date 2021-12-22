@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css">
    <link rel="stylesheet" href="/css/response/library-response.css">
@endsection

@section('header-bot')
    @include("includes.library.header-bot")
@endsection

@section('content')
    <main>
        <section class="section section-top">
            <div class="wrapper">
                <div class="lectures__cont flex">
                    <div class="lecture flex">
                        <div class="lectures__img">
                            <iframe class="img lectures__item_img" src="https://www.youtube.com/embed/Rlb6vGChevE"
                                frameborder="0" allowfullscreen=""
                                data-mce-src="https://www.youtube.com/embed/Rlb6vGChevE"></iframe>
                        </div>
                        <div class="lecture__inner">
                            <h3 class="lecture__title text-20">
                                <span class="lecture__strong">Թեմա՝ </span>«Ուկրաինայի դատախազության մարմիններում պետական
                                ծառայության բարեփոխումները»
                            </h3>
                            <p class="lecture__title text-20">
                                <span class="lecture__strong">Դասախոս՝ </span>Ուկրաինայի դատախազության ազգային ակադեմիայի
                                դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ
                            </p>
                            <div class="lecture__bot">
                                <div class="read-more__cont lectures__read-more__cont">
                                    <a class="read-more lecture__read-more"
                                        href="{{ route('videoLectureSingle', ['id' => 2]) }}">
                                        Դիտել տեսադասախոսությունը
                                    </a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecture flex">
                        <div class="lectures__img">
                            <iframe class="img lectures__item_img" src="https://www.youtube.com/embed/Rlb6vGChevE"
                                frameborder="0" allowfullscreen=""
                                data-mce-src="https://www.youtube.com/embed/Rlb6vGChevE"></iframe>
                        </div>
                        <div class="lecture__inner">
                            <h3 class="lecture__title text-20">
                                <span class="lecture__strong">Թեմա՝ </span>«Ուկրաինայի դատախազության մարմիններում պետական
                                ծառայության բարեփոխումները»
                            </h3>
                            <p class="lecture__title text-20">
                                <span class="lecture__strong">Դասախոս՝ </span>Ուկրաինայի դատախազության ազգային ակադեմիայի
                                դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ
                            </p>
                            <div class="lecture__bot">
                                <div class="read-more__cont lectures__read-more__cont">
                                    <a class="read-more lecture__read-more"
                                        href="{{ route('videoLectureSingle', ['id' => 2]) }}">
                                        Դիտել տեսադասախոսությունը
                                    </a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecture flex">
                        <div class="lectures__img">
                            <iframe class="img lectures__item_img" src="https://www.youtube.com/embed/Rlb6vGChevE"
                                frameborder="0" allowfullscreen=""
                                data-mce-src="https://www.youtube.com/embed/Rlb6vGChevE"></iframe>
                        </div>
                        <div class="lecture__inner">
                            <h3 class="lecture__title text-20">
                                <span class="lecture__strong">Թեմա՝ </span>«Ուկրաինայի դատախազության մարմիններում պետական
                                ծառայության բարեփոխումները»
                            </h3>
                            <p class="lecture__title text-20">
                                <span class="lecture__strong">Դասախոս՝ </span>Ուկրաինայի դատախազության ազգային ակադեմիայի
                                դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ
                            </p>
                            <div class="lecture__bot">
                                <div class="read-more__cont lectures__read-more__cont">
                                    <a class="read-more lecture__read-more"
                                        href="{{ route('videoLectureSingle', ['id' => 2]) }}">
                                        Դիտել տեսադասախոսությունը
                                    </a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecture flex">
                        <div class="lectures__img">
                            <iframe class="img lectures__item_img" src="https://www.youtube.com/embed/Rlb6vGChevE"
                                frameborder="0" allowfullscreen=""
                                data-mce-src="https://www.youtube.com/embed/Rlb6vGChevE"></iframe>
                        </div>
                        <div class="lecture__inner">
                            <h3 class="lecture__title text-20">
                                <span class="lecture__strong">Թեմա՝ </span>«Ուկրաինայի դատախազության մարմիններում պետական
                                ծառայության բարեփոխումները»
                            </h3>
                            <p class="lecture__title text-20">
                                <span class="lecture__strong">Դասախոս՝ </span>Ուկրաինայի դատախազության ազգային ակադեմիայի
                                դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ
                            </p>
                            <div class="lecture__bot">
                                <div class="read-more__cont lectures__read-more__cont">
                                    <a class="read-more lecture__read-more"
                                        href="{{ route('videoLectureSingle', ['id' => 2]) }}">
                                        Դիտել տեսադասախոսությունը
                                    </a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lecture flex">
                        <div class="lectures__img">
                            <iframe class="img lectures__item_img" src="https://www.youtube.com/embed/Rlb6vGChevE"
                                frameborder="0" allowfullscreen=""
                                data-mce-src="https://www.youtube.com/embed/Rlb6vGChevE"></iframe>
                        </div>
                        <div class="lecture__inner">
                            <h3 class="lecture__title text-20">
                                <span class="lecture__strong">Թեմա՝ </span>«Ուկրաինայի դատախազության մարմիններում պետական
                                ծառայության բարեփոխումները»
                            </h3>
                            <p class="lecture__title text-20">
                                <span class="lecture__strong">Դասախոս՝ </span>Ուկրաինայի դատախազության ազգային ակադեմիայի
                                դատախազության պետական ծառայողների որակավորման բարձրացման բաժնի պետ Նատալյա Նաուլիկ
                            </p>
                            <div class="lecture__bot">
                                <div class="read-more__cont lectures__read-more__cont">
                                    <a class="read-more lecture__read-more"
                                        href="{{ route('videoLectureSingle', ['id' => 2]) }}">
                                        Դիտել տեսադասախոսությունը
                                    </a>
                                    <img class="read-more__arrow" src="/media/img/icons/longArrow.png" alt="longArrow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="/js/lecture.js"></script>
@endsection
