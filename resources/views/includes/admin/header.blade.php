<header class="admin-header">
    <div class="admin-header__logo">
        <a href="{{ route('home') }}">
            <img class="img" src="/media/img/logo/brownLogo.png" alt="brownLogo">
        </a>
    </div>
    <div class="admin-nav">
        <ul class="admin-header__list">
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if (Request::is('admin/home/*') || Request::is('admin/home'))admin-header__link-active @endif"
                        href="{{ route('admin.home.index') }}">Գլխավոր էջ</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if (Request::is('admin/header/*') || Request::is('admin/header')
                        || Request::is('admin/subheader')|| Request::is('admin/subheader/*'))admin-header__link-active @endif" href="{{ route('admin.header.index') }}">Նավիգացիա</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if (Request::is('admin/about/*') || Request::is('admin/about'))admin-header__link-active @endif"
                        href="{{ route('admin.about.page.index') }}">Ակադեմիայի մասին</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if (Request::is('admin/about/governing-board-page') || 
                        Request::is('admin/about/governing-board-page/*') ||
                        Request::is('admin/about/governing-board-decree') ||
                        Request::is('admin/about/governing-board-decree/*') ||
                        Request::is('admin/about/governing-board-staff/*') ||
                        Request::is('admin/about/governing-board-staff'))admin-header__link-active @endif"
                            href="{{ route('admin.about.governing-board-page.index') }}">
                            Կառավարման խորհուրդ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/rectors-page') ||
                            Request::is('admin/about/rectors-page/*') || Request::is('admin/about/rectors-decree')
                            || Request::is('admin/about/rectors-decree/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.rectors-page.index') }}">
                            Ռեկտորի Էջ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/rectors-biography') ||
                        Request::is('admin/about/rectors-biography/*') ||
                        Request::is('admin/about/former-rectors-biography') ||
                        Request::is('admin/about/former-rectors-biography/*')) admin-header__link-active @endif"
                        href="{{ route('admin.about.rectors-biography.index') }}">
                            Ռեկտորի կենսագրություն
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/academy-structure') ||
                        Request::is('admin/about/academy-structure/*') || Request::is('admin/about/workers/*')) admin-header__link-active @endif"
                        href="{{ route('admin.about.academy-structure.index') }}">Ակադեմիայի կառուցվածք</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/report') ||
                            Request::is('admin/about/report/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.report.index') }}">
                            Հաշվետվություններ և աուդիտորական եզրակացություններ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/graduates') ||
                        Request::is('admin/about/graduates/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.graduates.index') }}">Շրջանավարտներ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/admission') ||
                        Request::is('admin/about/admission/*') || Request::is('admin/about/candidate') ||
                        Request::is('admin/about/candidate/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.admission.index') }}">Ընդունելություն</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/gallery') ||
                        Request::is('admin/about/gallery/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.gallery.index') }}">Տեսադարան</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/mass-media') ||
                        Request::is('admin/about/mass-media/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.mass-media.index') }}">
                            ԶԼՄ-ները մեր մասին
                        </a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/news') || Request::is('admin/news/*')) admin-header__link-active @endif"
                    href="{{ route('admin.news.index') }}">Նորություննր</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link @if(Request::is('admin/full-time-education') ||
                    Request::is('admin/full-time-education/*')) admin-header__link-active @endif"
                        href="{{ route('admin.full-time-education.training-program.index') }}">Առկա ուսուցում</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/training-program') ||
                        Request::is('admin/full-time-education/training-program/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.training-program.index') }}">Ուսուցման ծրագրեր</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/conducting-exam') ||
                        Request::is('admin/full-time-education/conducting-exam/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.conducting-exam.index') }}">Քննությունների անցկացման կարգ</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/full-time-education/conducting-practice') ||
                        Request::is('admin/full-time-education/conducting-practice/*')) admin-header__link-active @endif"
                            href="{{ route('admin.full-time-education.conducting-practice.index') }}">Փորձաշրջանի անցկացման կարգ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Հեռաուսուցում</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">Ակադեմիայի կառավարմանխորհուրդ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Գրադարան</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">Ակադեմիայի կառավարմանխորհուրդ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Բանբեր</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">Ակադեմիայի կառավարմանխորհուրդ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Գործընկերներ</a>
                    <div class="admin-header__arrow">
                        <img class="img" src="/media/img/icons/whiteDownArrow.png" alt="whiteDownArrow">
                    </div>
                </div>
                <ul class="admin-header__menu-list">
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">Ակադեմիայի կառավարմանխորհուրդ</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Հետադարձ կապ</a>
                </div>
            </li>
        </ul>
    </div>
</header>
