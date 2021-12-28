@if ($paginator->hasPages())
    <nav class="pagination admin__paginate flex">
        @if ($paginator->previousPageUrl())
            <a class="pagination__link" href="{{ $elements[0][1] }}">
                <img class="img pagination__icon" src="/media/img/icons/firstPage.png" alt="firstPage">
            </a>
            <a class="pagination__link" href="{{ $paginator->previousPageUrl() }}">
                <img class="img pagination__icon" src="/media/img/icons/previousPage.png" alt="previousPage">
            </a>
        @endif
        <div class="pagination__pages">
            <a class="pagination__num pagination__current" href="#">{{ $paginator->currentPage() }}</a>
            <a class="pagination__num pagination__divide" href="#">/</a>
            <a class="pagination__num pagination__last" href="{{ $elements[0][count($elements[0])] }}">
                {{ $paginator->lastPage() }}
            </a>
        </div>
        @if ($paginator->nextPageUrl())
            <a class="pagination__link" href="{{ $paginator->nextPageUrl() }}">
                <img class="img pagination__icon" src="/media/img/icons/nextPage.png" alt="nextPage">
            </a>
            <a class="pagination__link" href="{{ $elements[0][count($elements[0])] }}">
                <img class="img pagination__icon" src="/media/img/icons/lastPage.png" alt="lastPage">
            </a>
        @endif
    </nav>
@endif
