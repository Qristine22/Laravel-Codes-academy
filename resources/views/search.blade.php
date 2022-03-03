@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/search.css">
    <link rel="stylesheet" href="/css/response/search-response.css">
@endsection

@section('content')
    <main>
        <div class="search section">
            <div class="wrapper">
                <div class="search__cont">
                    <div class="results">
                        @if (@isset($searchResults) && !empty($searchResults))
                            @foreach ($searchResults as $result)
                                <div class="result">
                                    <a class="search__link text-20" href="#">
                                        @if (isset($result->name_en))
                                            {{ $result->{'name_' . app()->getLocale()} }}
                                        @elseif (isset($result->title_en))
                                            {{ $result->{'title_' . app()->getLocale()} }}
                                        @elseif (isset($result->description_en))
                                            {{ $result->{'description_' . app()->getLocale()} }}
                                        @elseif (isset($result->info_en))
                                            {{ $result->{'info_' . app()->getLocale()} }}
                                        @elseif (isset($result->text_en))
                                            {{ $result->{'text_' . app()->getLocale()} }}
                                        @endif
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    {{ $searchResults->appends(['search' => $_GET['search']])->links('includes.pagination.paginate') }}
                </div>
            </div>
        </div>
    </main>
@endsection
