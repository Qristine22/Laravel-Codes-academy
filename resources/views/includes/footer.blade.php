<footer class="footer" aria-label="Contact Information Footer">
    <div class="wrapper">
        <div class="footer__cont flex">
            <h2 class="footer__text">© @lang('home.footer-text')</h2>
            <div class="footer__sites">
                @foreach($sitesLinks as $sitesLink)
                    <a class="footer__link" href="{{ $sitesLink->link }}" aria-label="{{ $sitesLink->id }}" title="{{ $sitesLink->id }}">
                        <img src="{{ Storage::url($sitesLink->icon) }}" alt="{{ $sitesLink->id }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
