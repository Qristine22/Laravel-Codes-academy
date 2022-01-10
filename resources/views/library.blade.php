@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/library.css">
    <link rel="stylesheet" href="/css/response/library-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="section section-top section__min-height">
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/1.png" alt="book1">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Ապացույցների թույլատրելիությունը ՀՀ քրեական դատավարությունում՝ Մարդու իրավունքների եվրոպական
                            դատարանի նախադեպային իրավունքի համատեքստում
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/2.png" alt="book2">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Կյանքի իրավունքին, խոշտանգումների և վատ վերաբերմունքի այլ ձևերի արգելքին առնչվող գործերի
                            քննությունը
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/3.png" alt="book3">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Խոցելի տուժողների/վկաների եվ կասկածյալների մասնակցությամբ իրականացվող քննությունը
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/4.png" alt="book4">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Մինչդատական կալանքը եվ քննության հարակից հիմնախնդիրները
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/5.png" alt="book5">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Քրեական գործով քննության ընդհանուր մեթոդաբանությունը
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/6.png" alt="book6">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Խոշտանգման քրեաիրավական բնութագիրը եվ քննության առանձնահատկությունները
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/7.png" alt="book7">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Երեխաների նկատմամբ բռնության բնութագիրը եվ քննության առանձնահատկությունները
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/8.png" alt="book8">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Այլընտրանքային խափանման միջոցների կիրառման գործնական հմտություններ
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/9.png" alt="book9">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Դատական ակտերի մշակման հմտություններ
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/10.png" alt="book10">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Տուժողի կարգավիճակի առանձնահատկությունները քրեական դատավարությունում
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/11.png" alt="book11">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Հարցաքննության տեխնիկա և հաղորդակցման կառավարում
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/12.png" alt="book12">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Հակընդդեմ հարցման հիմնախնդիրները քրեական դատավարությունում
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/13.png" alt="book13">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Կալանավորումը որպես խափանման միջոց․ կիրառման և երկարացման հիմնավորվածությունը
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/library/training-manuals/14.png" alt="book14">
                            </a>
                            <a href="#">
                                <span class="pdfs__item_layer"></span>
                                <span class="pdfs__item_see-all text-18">
                                    <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                    @lang('main.downloade')
                                </span>
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">
                            Հայաստանում դատական ներուժի զարգացում-քաղաքացիական դատավարության նոր օրենսգիրքը
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/pdf.js"></script>
@endsection
