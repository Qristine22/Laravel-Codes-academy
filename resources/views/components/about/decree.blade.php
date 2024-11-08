<div class="pdf__item flex">
    <div class="pdf__item_cont">
        <p class="pdf__name text-18">
            {{ $item->{'info_' . app()->getLocale()} }}
        </p>
        @if (app()->getLocale() == 'am')
            <a class="pdf__link text-18" href="{{ Storage::url($item->pdf) }}" target="_blank"  title='PDF Doc' aria-label="PDF Document">
                {{ $item->pdf_name }} (PDF)
            </a>

        @else
            <span class="pdf__link text-18">@lang('main.info-is-available')</span>
        @endif
    </div>

    <div class="pdf__item_icon">
        {{ $slot }}
    </div>
</div>
