<div class="pdf__item flex">
    <div class="pdf__item_cont">
        <p class="pdf__name text-18">
            {{ $item->{'info_' . app()->getLocale()} }}
        </p>
        @if (app()->getLocale() == 'am')
            <a class="pdf__link text-18" href="{{ Storage::url($item->pdf) }}" target="_blank">
                {{ $item->pdf_name }}
            </a>
        @elseif(app()->getLocale() == 'ru')
            <span class="pdf__link text-18">Информация доступна на армянском языке.</span>
        @elseif(app()->getLocale() == 'en')
            <span class="pdf__link text-18">Information is available in Armenian</span>
        @endif
    </div>
    
    <div class="pdf__item_icon">
        {{ $slot }}
    </div>
</div>