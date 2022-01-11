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
                            Ակադեմիայի կառավարման խորհուրդ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/rectors-page') ||
                            Request::is('admin/about/rectors-page/*') || Request::is('admin/about/rectors-decree')
                            || Request::is('admin/about/rectors-decree/*')) admin-header__link-active @endif"
                            href="{{ route('admin.about.rectors-page.index') }}">
                            Ակադեմիայի ռեկտոր
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/rectors-biography') ||
                        Request::is('admin/about/rectors-biography/*')) admin-header__link-active @endif"
                        href="{{ route('admin.about.rectors-biography.index') }}">
                            Ռեկտորի կենսագրություն
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link @if(Request::is('admin/about/academy-structure') ||
                        Request::is('admin/about/academy-structure/*')) admin-header__link-active @endif"
                        href="{{ route('admin.about.academy-structure.index') }}">Ակադեմիայի կառուցվածք</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">
                            Հաշվետվություններ և աուդիտորական եզրակացություններ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">
                            Ակադեմիայի շրջանավարտներ
                        </a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">Ընդունելություն</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">Տեսադարան</a>
                    </li>
                    <li class="admin-header__menu-item">
                        <a class="text-18 admin-header__menu-link" href="#">ԶԼՄ-ները մեր մասին</a>
                    </li>
                </ul>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Նորություննր</a>
                </div>
            </li>
            <li class="admin-header__item">
                <div class="admin-header__item_cont flex">
                    <a class="text-20 admin-header__link" href="#">Առկա ուսուցում</a>
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
