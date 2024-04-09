<section class="courses__pdfs section-text">
    <div class="wrapper">
        <div class="link__pdfs">
            <div class="link__pdf flex">
                <a class="link__name text-18" href="{{ route('FAQ') }}" aria-label=" {{ $FAQ->{'title_'.app()->getLocale()} }}">
                    {{ $FAQ->{'title_'.app()->getLocale()} }}
                </a>
            </div>
            <div class="link__pdf flex">
                <a class="link__name text-18" href="{{ route('distanceLearningGuide') }}" aria-label="{{ $guide->{'name_' . app()->getLocale()} }}">
                    {{ $guide->{'name_' . app()->getLocale()} }}
                </a>
                <a href="{{ route('distanceLearningGuideDownload', ['pdf' => $guide->id]) }}" aria-label="main.download">
                    <div class="link__pdf_icon">
                        <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                        <span class="link__pdf_span text-18">@lang('main.download')</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
