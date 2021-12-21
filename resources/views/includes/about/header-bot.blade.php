<div class="header__bot">
    <div class="wrapper">
        <nav class="header__bot_nav">
            <ul class="header__bot_list">
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/governing-board'))header__bot_link-active @endif" href="{{ route('governingBoard') }}">
                        Ակադեմիայի կառավարման խորհուրդ
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/rector') || Request::is('about/rectors-decrees'))header__bot_link-active @endif" href="{{ route('rector') }}">
                        Ակադեմիայի ռեկտոր
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/academy-structure'))header__bot_link-active @endif"
                        href="{{ route('academyStructure') }}">Ակադեմիայի կառուցվածք</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/report'))header__bot_link-active @endif"
                    href="{{ route('report') }}">
                        Հաշվետվություններ և աուդիտորական եզրակացություններ
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/graduates'))header__bot_link-active @endif"
                    href="{{ route('graduates') }}">Ակադեմիայի շրջանավարտներ</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/admission') || Request::is('about/judges-candidates'))header__bot_link-active @endif"
                    href="{{ route('admission') }}">Ընդունելություն</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/gallery') || Request::is('about/gallery-single'))header__bot_link-active @endif"
                    href="{{ route('gallery') }}">Տեսադարան</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('about/mass-media'))header__bot_link-active @endif" href="{{ route('massMedia') }}">ԶԼՄ-ները մեր մասին</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
