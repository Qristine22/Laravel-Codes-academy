@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/about-response.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection

@section('header-bot')
    @include("includes.header-bot", ['headersBot' => $headersBot])
@endsection

@section('content')
    <main aria-label="gallery">
        <section class="governing__dates section-top">
            <div class="wrapper">
                <div class="dates__item dates__item-first flex">
                    <div class="about__dates gallery__dates flex">
                        @if(@isset($galleries) && !empty($galleries))
                            @foreach($years as $key => $val)
                                <div class="governing__date date-12">
                                    <a class="date about__date @if($year == $key)date-active @endif"
                                        aria-label="{{ $key }}"
                                        href="{{ route('gallery', ['year' => $key]) }}">{{ $key }}</a>
                                </div>
                            @endforeach
                        @endif
                        @if(@isset($galleryVideos) && !empty($galleryVideos))
                            @foreach($years as $key => $val)
                                <div class="governing__date date-12">
                                    <a class="date about__date @if($year == $key)date-active @endif"
                                        aria-label="{{ $key }}"
                                        href="{{ route('galleryVideo', ['year' => $key]) }}">{{ $key }}</a>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <a class="header__bot_link @if(Request::is('about/gallery/video') || Request::is('about/gallery/video/*'))header__bot_link-active @endif"
                        aria-label="@lang('about.gallery.video')"
                        href="{{ route('galleryVideo') }}">@lang('about.gallery.video')</a>


                </div>
            </div>
        </section>
        <section class="gallery section-text section__min-height">
            <div class="wrapper">
                <div class="gallery__cont flex gallery_video">
                    @if(@isset($galleries) && !empty($galleries))
                        @foreach($galleries as $gallery)
                            @if(count($gallery->imgs) > 1)
                                @foreach($gallery->imgs as $img)
                                    <div class="gallery__item flex">
                                        <a class="gallery__top" data-fancybox="gallery"
                                            aria-label="{{ $img->id }}"
                                            data-caption="{{ $gallery->{'text_'.app()->getLocale()} }}"
                                            href="{{ Storage::url($img->img) }}">
                                        <img class="gallery__img img" src="{{ Storage::url($img->img) }}" alt="{{ $gallery->{'title_'.app()->getLocale()} ?? 'Gallery Image ' . $img->id }}">
                                        </a>
                                        <span class="gallery__date text-20">{{ $gallery->full_date }}</span>
                                    </div>

                                @endforeach
                            @elseif(@isset($gallery->imgs[0]))
                                <div class="gallery__item flex">
                                    <a class="gallery__top" data-fancybox="gallery"
                                        aria-label="{{ $gallery->imgs[0]->id }}"
                                        data-caption="{{ $gallery->{'text_'.app()->getLocale()} }}"
                                        href="{{ Storage::url($gallery->imgs[0]->img) }}">
                                        <img class="gallery__img img" src="{{ Storage::url($gallery->imgs[0]->img) }}" alt="{{ $gallery->{'title_'.app()->getLocale()} ?? 'Gallery Image ' . $gallery->imgs[0]->id }}">                                    </a>
                                    <span class="gallery__date text-20">{{ $gallery->full_date }}</span>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    @if(@isset($galleryVideos) && !empty($galleryVideos))
                        @foreach($galleryVideos as $galleryVideo)
                            <div class="gallery-video__item flex">
                                {!! $galleryVideo->link !!}
                                <span class="gallery__date text-20">{{ $galleryVideo->full_date }}</span>
                                <div>
                                    <p class="gallery__text text-20">{{ $galleryVideo->{'text_'.app()->getLocale()} }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endsection
