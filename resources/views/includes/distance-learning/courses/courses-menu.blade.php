<section class="section-text rector__bot">
    <div class="wrapper">
        <div class="rector__bot_cont">
            <a class="about__link text-18 @if(Request::is('distance-learning/motivational-videos')) about__link-active @endif" href="{{ route('motivationalVideos') }}">
                @lang('distance-learning.motivational-videos')
            </a>
            <a class="about__link text-18 @if(Request::is('distance-learning/media-materials')) about__link-active @endif" href="{{ route('mediaMaterials') }}">
                @lang('distance-learning.media-materials')
            </a>
            <a class="about__link text-18 @if(Request::is('distance-learning/distance-learning-guide')) about__link-active @endif" href="{{ route('distanceLearningGuide') }}">
                @lang('distance-learning.distance-larening-guide')
            </a>
        </div>
    </div>
</section>