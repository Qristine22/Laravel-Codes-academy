<div class="header__bot">
    <div class="wrapper">
        <nav class="header__bot_nav">
            <ul class="header__bot_list">
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('full-time-education') || Request::is('full-time-education/training-programs'))header__bot_link-active @endif" href="{{ route('fullTimeEducation') }}">Ուսուցման ծրագրեր</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('full-time-education/conducting-exams'))header__bot_link-active @endif" href="{{ route('conductingExams') }}">Քննությունների անցկացման կարգ</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('full-time-education/conducting-practice'))header__bot_link-active @endif" href="{{ route('conductingPractice') }}">
                        Փորձաշջանի անցկացման կարգ
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('full-time-education/rules-of-behaviour'))header__bot_link-active @endif" href="{{ route('rulesOfBehaviour') }}">Ունկնդրի վարքագծի կանոններ</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('full-time-education/dormitory-rules'))header__bot_link-active @endif" href="{{ route('dormitoryRules') }}">
                        Հանրակացարանային համալիրից օգտվելու կանոնները
                    </a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('full-time-education/provide-deferral'))header__bot_link-active @endif" href="{{ route('provideDeferral') }}">
                        Ունկնդիրներին տարկետում տրամադրելու կարգ
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>