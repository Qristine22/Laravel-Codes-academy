<div class="members__item">
    <img class="img" src="{{ Storage::url($item->img) }}" alt="Image for item {{ $item->id }}">
    <a class="members__item_cont" href="{{ route('governingBoardBiography', ['id' => $item->id]) }}">
        <h3 class="member__title">{{ $item->{'name_'.app()->getLocale()} }}</h3>
        <h4 class="member__subtitle {{ empty($item->{'position_'.app()->getLocale()}) ? 'hidden' : '' }}">
            {{ $item->{'position_'.app()->getLocale()} ?? '' }}
        </h4>
    </a>
</div>
