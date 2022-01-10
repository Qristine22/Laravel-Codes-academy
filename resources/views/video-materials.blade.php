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
        <section class="distance-learning section-text">
            <div class="wrapper">
                <div class="videos__cont">
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Հետադարձ կապ</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Ծրագիր</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Ուսումնական նյութեր</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Ներածություն</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Հաճախակի տրվող հարցեր</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Ինքնաստուգիչ հարցեր</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Տեխնիկական պահանջներ</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Դասավանդման պլան</span>
                    </div>
                    <div class="videos__item flex">
                        <video class="videos__video" controls="controls">
                            <source src="/media/videos/distance-learning/1.mp4" type="video/mp4"
                                data-mce-src="/uploads/HETADARDZ_KAP_0.mp4">
                            <source src="movie.ogg" type="video/ogg" data-mce-src="movie.ogg">
                            Your browser does not support the video tag.
                        </video>
                        <span class="video__name text-20">Ինքնաստուգիչ հարցերի պատասխաններ</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
