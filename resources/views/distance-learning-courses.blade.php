@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="courses distance-learning section-text">
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide courses__slide-item" data-id="1">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book1.png" alt="book1">
                        </div>
                        <h2 class="courses__item_name text-26">Փախստականների իրավունք քրեական ուղղվածություն</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="2">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book2.png" alt="book2">
                        </div>
                        <h2 class="courses__item_name text-26">
                            Անչափահասի պաշտպանությունը քրեական գործերով վարույթի ընթացքում
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="3">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book3.png" alt="book3">
                        </div>
                        <h2 class="courses__item_name text-26">
                            Երեխաների նկատմամբ բռնության քննության առանձնահատկությունները
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="4">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book4.png" alt="book4">
                        </div>
                        <h2 class="courses__item_name text-26">
                            Քաղաքացիական դատավարության արդի հիմնախնդիրները և արդյունավետության բարձրացման ուղղությունները
                        </h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="5">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book5.png" alt="book5">
                        </div>
                        <h2 class="courses__item_name text-26">Սթրեսի և ժամանակի կառավարում</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="6">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book6.png" alt="book6">
                        </div>
                        <h2 class="courses__item_name text-26">Փախստականների իրավունք վարչական ուղղվածություն</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="7">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book7.png" alt="book7">
                        </div>
                        <h2 class="courses__item_name text-26">Կառավարչական հմտություններ և Ներազդման հոգեբանություն</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item" data-id="8">
                        <div class="courses__item">
                            <img class="img"
                                src="/media/img/distance-learning/distance-learning-courses/book8.png" alt="book8">
                        </div>
                        <h2 class="courses__item_name text-26">Փաստարկում և հռետորիկա</h2>
                    </div>
                </div>
            </div>
            <div class="courses__triangle"></div>
        </section>
        <section class="courses__pdfs">
            <div class="wrapper">
                <div class="courses__pdfs_cont">
                    <div class="courses__block" data-parent-id="1">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="2">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="3">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="4">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="5">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="6">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="7">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="courses__block" data-parent-id="8">
                        <div class="courses__pdfs_items flex">
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/2.png" alt="2">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/3.png" alt="3">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                            <div class="courses__pdfs_item">
                                <a href="#">
                                    <img class="img"
                                        src="/media/img/distance-learning/distance-learning-courses/pdfs/5.png" alt="5">
                                </a>
                                <a href="#">
                                    <span class="pdfs__item_layer"></span>
                                    <span class="pdfs__item_see-all text-18">
                                        <img class="pdfs__layer_img" src="\media\img\icons\pdf.png" alt="pdf">
                                        @lang('main.downloade')
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="courses__btns flex">
                            <a href="{{ route('motivationalVideos', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-play"></i>
                                    Մոտիվացնող տեսանյութեր
                                </button>
                            </a>
                            <a href="{{ route('mediaMaterials', ['id' => 1]) }}">
                                <button class="courses__btn text-18">
                                    <i class="courses__icon fas fa-headphones"></i>
                                    Լրացուցիչ մեդիա-նյութեր
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection

@section('scripts')
    <script src="/js/swiper.js"></script>
    <script src="/js/pdf.js"></script>
    <script src="/js/distance-learning.js"></script>
@endsection
