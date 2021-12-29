<section class="section-text rector__bot">
    <div class="wrapper">
        <div class="rector__bot_cont">
            <a class="about__link text-18 @if (Request::is('about/judges-candidates'))about__link-active @endif"
            href="{{ route('judgesCandidates') }}">
                Դատավորի թեկնածուի հավակնորդներ
            </a>
            <a class="about__link text-18 @if (Request::is('about/prosecutors-candidates'))about__link-active @endif"
            href="{{ route('prosecutorsCandidates') }}">Դատախազների թեկնածուներ</a>
            <a class="about__link text-18 @if (Request::is('about/investigators-candidates'))about__link-active @endif" href="{{ route('investigatorsCandidates') }}">Քննիչների թեկնածուներ</a>
        </div>
    </div>
</section>