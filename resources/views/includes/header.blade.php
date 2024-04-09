<header class="header" aria-label="Header">
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
<nav class="mobile-nav" aria-label="mobile-nav">
    <div class="wrapper">

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
    </div>
</nav>
