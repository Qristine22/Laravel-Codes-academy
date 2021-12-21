<div class="header__bot">
    <div class="wrapper">
        <nav class="header__bot_nav">
            <ul class="header__bot_list">
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library'))header__bot_link-active @endif"
                    href="{{ route('library') }}">Ուսումնական ձեռնարկենր</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/training-materials'))header__bot_link-active @endif"
                    href="{{ route('trainingMaterials') }}">Ուսումնական նյութեր</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/video-lectures') ||
                        Request::is('library/video-lecture-single/*'))header__bot_link-active @endif"
                        href="{{ route('videoLectures') }}">Տեսադասախոսություններ</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/academy-publications'))header__bot_link-active @endif" href="{{ route('academyPublications') }}">Ակադեմիայի հրատարակություններ</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/professional-literature'))header__bot_link-active @endif" href="{{ route('professionalLiterature') }}">
                        Մասնագիտական գրականության ցանկ
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/organizing-library-activities'))header__bot_link-active @endif" href="{{ route('organizingLibraryActivities') }}">
                        Գրադարանի գործունեության վերաբերյա ռեսուրսներ
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/ECHR-resources'))header__bot_link-active @endif" href="{{ route('ECHRResources') }}">
                        ՄԻԵԴ իրավաբանության վերաբերյալ ռեսուրսներ
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('library/investigator-training-modules'))header__bot_link-active @endif"
                    href="{{ route('investigatorTrainingModules') }}">
                        Անչափահասների մասնակցությամբ գործերով մասնագիտացված քննիչների վերապատրաստման մոդուլներ
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
