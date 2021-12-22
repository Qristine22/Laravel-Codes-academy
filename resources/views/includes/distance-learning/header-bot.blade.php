<div class="header__bot">
    <div class="wrapper">
        <nav class="header__bot_nav">
            <ul class="header__bot_list">
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('distance-learning/video-materials'))header__bot_link-active @endif" href="{{ route('videoMaterials') }}">Տեղեկատվական տեսանյութեր</a>
                </li>
                <li class="header__bot_item">
                    <a class="header__bot_link @if (Request::is('distance-learning/distance-learning-courses') || 
                        Request::is('distance-learning/motivational-videos') ||
                        Request::is('distance-learning/distance-learning-guide') ||
                        Request::is('distance-learning/media-materials'))header__bot_link-active @endif"
                        href="{{ route('distanceLearningCourses') }}">Դասընթացներ</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
