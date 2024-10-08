<header class="header" aria-label="Header">
    <div class="instruments-wrapper">
        <div class="instruments">
            <div class="resize-buttons">
                <span class="mode-text">@lang('main.font-size')</span>
                <button id="downButton">A-</button>
                <button id="upButton">A+</button>
                <button id="restartButton"><svg fill="#000000" viewBox="-7.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="rotate(-45)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>restart</title>
                            <path d="M15.88 13.84c-1.68-3.48-5.44-5.24-9.040-4.6l0.96-1.8c0.24-0.4 0.080-0.92-0.32-1.12-0.4-0.24-0.92-0.080-1.12 0.32l-1.96 3.64c0 0-0.44 0.72 0.24 1.040l3.64 1.96c0.12 0.080 0.28 0.12 0.4 0.12 0.28 0 0.6-0.16 0.72-0.44 0.24-0.4 0.080-0.92-0.32-1.12l-1.88-1.040c2.84-0.48 5.8 0.96 7.12 3.68 1.6 3.32 0.2 7.32-3.12 8.88-1.6 0.76-3.4 0.88-5.080 0.28s-3.040-1.8-3.8-3.4c-0.76-1.6-0.88-3.4-0.28-5.080 0.16-0.44-0.080-0.92-0.52-1.080-0.4-0.080-0.88 0.16-1.040 0.6-0.72 2.12-0.6 4.36 0.36 6.36s2.64 3.52 4.76 4.28c0.92 0.32 1.84 0.48 2.76 0.48 1.24 0 2.48-0.28 3.6-0.84 4.16-2 5.92-7 3.92-11.12z"></path>
                        </g>
                    </svg></button>
            </div>
            <div class="dark-light-buttons">
                <span class="mode-text">@lang('main.color-mode')</span>
                <button id="lightButton"></button>
                <button id="darkButton"></button>
            </div>
        </div>
    </div>
    <div class="wrapper">
       <h1 class="sr-only" aria-label="Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ">Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ</h1>
        <div class="header__cont flex">
            <div class="header__logo">
                @auth
                    <a class="admin__btn admin__logout" href="{{ route('logout') }}">logout</a>
                @endauth
                <a href="{{ route('home') }}">
                    <img class="header__logo_img" src="/media/img/logo/brownLogo.png" alt="Logo for header">
                </a>
                @auth
                    <a class="admin__btn" href="{{ route('admin.home.index') }}">Admin</a>
                @endauth
            </div>


            {{-- navigation --}}
            <nav class="nav" aria-label="Navigation Menu">
                <ul class="header__list header__info_list flex">
                    @foreach ($headers as $header)
                        <li class="header__item">
                            <a class="header__link
                                @if (Request::is($header->link, $header->link . '/*', 'search/' . $header->link . '/*',
                                'search/' . $header->link . 's/*'))header__link-active @endif"
                                aria-label="{{ $header->{'name_' . app()->getLocale()} }}"
                                title="{{ $header->{'name_' . app()->getLocale()} }}"
                                href="{{ env('APP_URL') . $header->link }}">
                                {{ $header->{'name_' . app()->getLocale()} }}
                            </a>

                            {{-- navigation menu --}}
                            @foreach ($header->subheaders as $subheader)
                                @if (!Request::is($header->link, $header->link . '/*'))
                                    <ul class="header__menu_list">
                                        @foreach ($header->subheaders as $subheader)
                                            <li class="header__menu_item">
                                                <a class="header__menu_link"
                                                   aria-label="{{ $header->{'name_' . app()->getLocale()} }}"
                                                   title="{{ $header->{'name_' . app()->getLocale()} }}"
                                                    href="{{ env('APP_URL') . $subheader->link }}">
                                                    {{ $subheader->{'name_' . app()->getLocale()} }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @php break @endphp
                                @endif
                            @endforeach
                        </li>
                    @endforeach


                    {{-- languages --}}
                    <li class="header__item flex">
                        <a class="header__lang @if (app()->getLocale() == 'am') header__lang-active @endif"
                            href="{{ route('lang', ['locale' => 'am']) }}" aria-label="arm">հայ</a>
                        <a class="header__lang @if (app()->getLocale() == 'ru') header__lang-active @endif"
                            href="{{ route('lang', ['locale' => 'ru']) }}" aria-label="rus">pyc</a>
                        <a class="header__lang @if (app()->getLocale() == 'en') header__lang-active @endif"
                            href="{{ route('lang', ['locale' => 'en']) }}" aria-label="eng">eng</a>
                    </li>
                </ul>
            </nav>
            <div class="burger-menu flex">
                <span class="burger-menu__line"></span>
                <span class="burger-menu__line"></span>
                <span class="burger-menu__line"></span>
            </div>
        </div>
    </div>
</header>


{{-- mobile header ************************************************************************** --}}
<div class="wrapper" role="navigation">
    <nav class="mobile-nav" aria-label="mobile-nav">

        {{-- mobile navigation --}}
        <ul class="header-mob__list">
            @foreach ($headers as $header)
                <li class="header-mob__item">
                    <a class="header__link{{ count($header->subheaders) ? '' : ' header-mob__item-single' }}{{ Request::is($header->link, $header->link . '/*', 'search/' . $header->link . '/*', 'search/' . $header->link . 's/*') ? ' header__menu_link-active' : '' }}"
                        href="{{ env('APP_URL') . $header->link }}">
                        {{ $header->{'name_' . app()->getLocale()} }}
                    </a>

                    @if (count($header->subheaders))
                        {{-- mobile navigation arrow --}}
                        <div class="header-mob__arrow">
                            <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                        </div>

                        {{-- mobile navigation menu --}}
                        <ul class="header-mob__menu_list">
                            @foreach ($header->subheaders as $subheader)
                                <li class="header-mob__menu_item">
                                    <a class="header__menu_link @if (Request::is($subheader->link, $subheader->link . '/*'))header__menu_link-active @endif"
                                        href="{{ env('APP_URL') . $subheader->link }}">
                                        {{ $subheader->{'name_' . app()->getLocale()} }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach


            {{-- languages --}}
            <li class="header-mob__item flex">
                <a class="header__lang  @if (app()->getLocale() == 'am') header__lang-active @endif"
                    href="{{ route('lang', ['locale' => 'am']) }}" aria-label="arm">հայ</a>
                <a class="header__lang  @if (app()->getLocale() == 'en') header__lang-active @endif"
                    href="{{ route('lang', ['locale' => 'en']) }}" aria-label="eng">eng</a>
                <a class="header__lang  @if (app()->getLocale() == 'ru') header__lang-active @endif"
                    href="{{ route('lang', ['locale' => 'ru']) }}" aria-label="rus">pyc</a>
            </li>
        </ul>
</nav>
    </div>
