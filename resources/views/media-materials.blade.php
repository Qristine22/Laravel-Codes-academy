@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css?v=<?= time(); ?>">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main aria-label="media-materials">
        <section class="materials section-text distance-learning">
            <div class="wrapper">
                <div class="materials__cont">
                    @foreach($additionalMaterials as $additionalMaterial)
                        <div class="materials__item">
                            <h2 class="material__title text-20">{{ $additionalMaterial->{'name_'.app()->getLocale()} }}</h3>
                            <ul class="material__list">
                                @foreach($additionalMaterial->links as $link)
                                    <li class="material__list_item">
                                        @if(!empty($link->pdf))
                                            <a class="material__link text-18" href="{{ Storage::url($link->pdf) }}"
                                                target="_blank">{{ $link->link_name }}
                                            </a>
                                        @else
                                            <a class="material__link text-18" href="{{ $link->link }}"
                                                target="_blank">{{ $link->link_name }}
                                            </a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('includes.distance-learning.courses.courses-menu')
    </main>
@endsection
