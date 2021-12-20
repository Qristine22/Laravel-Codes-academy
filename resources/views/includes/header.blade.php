<header class="header">
    <div class="wrapper">
        <div class="header__cont flex">
            <div class="header__logo">
                <a href="{{ route('home') }}">
                    <img class="header__logo_img" src="/media/img/logo/brownLogo.png" alt="Logo">
                </a>
            </div>
            <nav class="nav">
                <ul class="header__list header__info_list flex">
                    <li class="header__item">
                        <a class="header__link" href="{{ route('about') }}">Ակադեմիայի մասին</a>
                        <ul class="header__menu_list">
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('governingBoard') }}">
                                    Ակադեմիայի կառավարման խորհուրդ
                                </a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('rector') }}">Ակադեմիայի ռեկտոր</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('academyStructure') }}">Ակադեմիայի կառուցվածք</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('report') }}">
                                    Հաշվետվություններ և աուդիտորական եզրակացություններ
                                </a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('graduates') }}">Ակադեմիայի շրջանավարտներ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('admission') }}">Ընդունելություն</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('gallery') }}">Տեսադարան</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('massMedia') }}">ԶԼՄ-ները մեր մասին</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="{{ route('news') }}">Նորություններ</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="{{ route('fullTimeEducation') }}">Առկա ուսուցում</a>
                        <ul class="header__menu_list">
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('fullTimeEducation') }}">Ուսուցման ծրագրեր</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="{{ route('conductingExams') }}">
                                    Քննությունների անցկացման կարգ
                                </a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Փորձաշջանի անցկացման կարգ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Ունկնդրի վարքագծի կանոններ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Հանրակացարանային համալիրից օգտվելու
                                    կանոնները</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Ունկնդիրներին տարկետում տրամադրելու կարգ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="{{ route('distanceLearning') }}">Հեռաուսուցում</a>
                        <ul class="header__menu_list">
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="video-materials.php">Տեղեկատվական տեսանյութեր</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="distance-learning-courses.php">Դասընթացներ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">ԱՄՆ Դաշնային դատական կենտրոնի միջազգային
                                    դատական կապերի գծով ղեկավարի հարցազրույցը Արդարադատության ակադեմիայի
                                    հեռաուսուցման ծրագրերի և նյութերի մասին</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="#">Գրադարան</a>
                        <ul class="header__menu_list">
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Ուսումնական ձեռնարկենր</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Ուսումնական նյութեր</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="video-lectures.php">Տեսադասախոսություններ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Ակադեմիայի հրատարակություններ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Մասնագիտական գրականության ցանկ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Գրադարանի գործունեության վերաբերյա
                                    ռեսուրսներ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Անչփահասների մասնակցությամբ գործերով
                                    մասնագիտացված քննիչների վերապատրաստման մոդուլներ</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="bulletin.php">Բանբեր</a>
                        <ul class="header__menu_list">
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Բանբեր, 2021, № 1 (5)</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Բանբեր, 2020, № 2 (4)</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="#">Արխիվ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="partners.php">Գործընկերներ</a>
                        <ul class="header__menu_list">
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="partners.php#international">Միջազգային</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="partners.php#foreign">Օտարերկրյա</a>
                            </li>
                            <li class="header__menu_item">
                                <a class="header__menu_link" href="partners.php#arm&artsakh">Հայաստանյան և Արցախյան</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="contacts.php">Հետադարձ կապ</a>
                    </li>
                    <li class="header__item flex">
                        <a class="header__lang" href="#">հայ</a>
                        <a class="header__lang" href="#">eng</a>
                        <a class="header__lang" href="#">pyc</a>
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
                        <a class="header__menu_link" href="{{ route('governingBoard') }}">Ակադեմիայի կառավարման խորհուրդ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('rector') }}">Ակադեմիայի ռեկտոր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="{{ route('academyStructure') }}">Ակադեմիայի կառուցվածք</a>
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
                        <a class="header__menu_link" href="{{ route('conductingExams') }}">Քննությունների անցկացման կարգ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Փորձաշջանի անցկացման կարգ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Ունկնդրի վարքագծի կանոններ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Հանրակացարանային համալիրից օգտվելու կանոնները</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Ունկնդիրներին տարկետում տրամադրելու կարգ</a>
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
                        <a class="header__menu_link" href="video-materials.php">Տեղեկատվական տեսանյութեր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="distance-learning-courses.php">Դասընթացներ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">
                            ԱՄՆ Դաշնային դատական կենտրոնի միջազգային դատական կապերի գծով ղեկավարի հարցազրույցը Արդարադատության ակադեմիայի հեռաուսուցման ծրագրերի և նյութերի մասին
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="#">Գրադարան</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Ուսումնական ձեռնարկենր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Ուսումնական նյութեր</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="video-lectures.php">Տեսադասախոսություններ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Ակադեմիայի հրատարակություններ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Մասնագիտական գրականության ցանկ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Գրադարանի գործունեության վերաբերյա ռեսուրսներ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Անչփահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ</a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="bulletin.php">Բանբեր</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Բանբեր, 2021, № 1 (5)</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Բանբեր, 2020, № 2 (4)</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="#">Արխիվ</a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="partners.php">Գործընկերներ</a>
                <div class="header-mob__arrow">
                    <img class="img" src="/media/img/icons/downArrow.png" alt="downArrow">
                </div>
                <ul class="header-mob__menu_list">
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="partners.php#international">Միջազգային</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="partners.php#foreign">Օտարերկրյա</a>
                    </li>
                    <li class="header-mob__menu_item">
                        <a class="header__menu_link" href="partners.php#arm&artsakh">Հայաստանյան և Արցախյան</a>
                    </li>
                </ul>
            </li>
            <li class="header-mob__item">
                <a class="header__link" href="contacts.php">Հետադարձ կապ</a>
            </li>
            <li class="header-mob__item flex">
                <a class="header__lang" href="#">հայ</a>
                <a class="header__lang" href="#">eng</a>
                <a class="header__lang" href="#">pyc</a>
            </li>
        </ul>
    </div>
</nav>