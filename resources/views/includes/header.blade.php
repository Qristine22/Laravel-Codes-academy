<header class="header">
    <div class="wrapper">
        <div class="header__cont flex">
            <div class="header__logo">
                @auth
                    <a class="admin__btn admin__logout" href="{{ route('logout') }}">logout</a>
                @endauth
                <a href="{{ route('home') }}">
                    <img class="header__logo_img" src="/media/img/logo/brownLogo.png" alt="Logo">
                </a>
                @auth
                    <a class="admin__btn" href="{{ route('admin.home.index') }}">Admin</a>
                @endauth
            </div>

            <nav class="nav">
                <ul class="header__list header__info_list flex">
                    @foreach($headers as $header)
                        <li class="header__item">
                            <a class="header__link 
                                @if(Request::is($header->link))
                                    header__link-active
                                @else
                                    @foreach($header->subheaders as $subheader)
                                        @if(Request::is($subheader->link))header__link-active
                                            @php break @endphp
                                        @endif
                                    @endforeach
                                @endif"
                                href="{{ env('APP_URL').$header->link }}">
                                {{ $header->{'name_'.app()->getLocale()} }}
                            </a>
                            @foreach ($header->subheaders as $subheader)
                                @if (!(Request::is($header->link) || Request::is($subheader->link)))
                                    <ul class="header__menu_list">
                                        @foreach($header->subheaders as $subheader)
                                            <li class="header__menu_item">
                                                <a class="header__menu_link" href="{{ env('APP_URL').$subheader->link }}">
                                                    {{ $subheader->{'name_'.app()->getLocale()} }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @php break @endphp
                                @endif
                            @endforeach
                        </li>
                    @endforeach
                    <li class="header__item flex">
                        <a class="header__lang @if (app()->getLocale() == 'am') header__lang-active @endif"
                            href="{{ route('lang', ['locale' => 'am']) }}">հայ</a>
                        <a class="header__lang @if (app()->getLocale() == 'en') header__lang-active @endif"
                            href="{{ route('lang', ['locale' => 'en']) }}">eng</a>
                        <a class="header__lang @if (app()->getLocale() == 'ru') header__lang-active @endif"
                            href="{{ route('lang', ['locale' => 'ru']) }}">pyc</a>
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
<nav class="mobile-nav">
    <div class="wrapper">
        <ul class="header-mob__list">
            <li class="header-mob__item">
                <a class="header__link" href="{{ route('about') }}">Ակադեմիայի մասին</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('governingBoard') }}">Ակադեմիայի կառավարման
                            խորհուրդ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('rector') }}">Ակադեմիայի ռեկտոր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('academyStructure') }}">Ակադեմիայի
                            կառուցվածք</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('report') }}">
                            Հաշվետվություններ և աուդիտորական եզրակացություններ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('graduates') }}">Ակադեմիայի շրջանավարտներ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('admission') }}">Ընդունելություն</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('gallery') }}">Տեսադարան</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('massMedia') }}">ԶԼՄ-ները մեր մասին</a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item header-mob__item-single">
                <a class="header__link" href="{{ route('news') }}">Նորություններ</a>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="{{ route('fullTimeEducation') }}">Առկա ուսուցում</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('fullTimeEducation') }}">Ուսուցման ծրագրեր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('conductingExams') }}">Քննությունների անցկացման
                            կարգ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('conductingPractice') }}">
                            Փորձաշջանի անցկացման կարգ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('rulesOfBehaviour') }}">
                            Ունկնդրի վարքագծի կանոններ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('dormitoryRules') }}">
                            Հանրակացարանային համալիրից օգտվելու կանոնները
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('provideDeferral') }}">
                            Ունկնդիրներին տարկետում տրամադրելու կարգ
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="{{ route('distanceLearning') }}">Հեռաուսուցում</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('videoMaterials') }}">Տեղեկատվական
                            տեսանյութեր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('distanceLearningCourses') }}">Դասընթացներ</a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="{{ route('library') }}">Գրադարան</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('library') }}">Ուսումնական ձեռնարկենր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('trainingMaterials') }}">Ուսումնական նյութեր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('videoLectures') }}">Տեսադասախոսություններ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('academyPublications') }}">
                            Ակադեմիայի հրատարակություններ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('professionalLiterature') }}">
                            Մասնագիտական գրականության ցանկ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('organizingLibraryActivities') }}">
                            Գրադարանի գործունեության վերաբերյա ռեսուրսներ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('ECHRResources') }}">
                            ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ
                        </a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('investigatorTrainingModules') }}">
                            Անչփահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item header-mob__item-single">
                <a class="header__link" href="{{ route('bulletin') }}">Բանբեր</a>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="{{ route('partners') }}">Գործընկերներ</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('partners', '#international') }}">Միջազգային</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('partners', '#foreign') }}">Օտարերկրյա</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('partners', '#arm&artsakh') }}">Հայաստանյան և
                            Արցախյան</a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="{{ route('contacts') }}">Հետադարձ կապ</a>
            </li>
            <li class="header-mob__item flex">
                <a class="header__lang  @if (app()->getLocale() == 'am') header__lang-active @endif"
                href="{{ route('lang', ['locale' => 'am']) }}">հայ</a>
                <a class="header__lang  @if (app()->getLocale() == 'en') header__lang-active @endif"
                href="{{ route('lang', ['locale' => 'en']) }}">eng</a>
                <a class="header__lang  @if (app()->getLocale() == 'ru') header__lang-active @endif"
                href="{{ route('lang', ['locale' => 'ru']) }}">pyc</a>
            </li>
        </ul>
    </div>
</nav>
