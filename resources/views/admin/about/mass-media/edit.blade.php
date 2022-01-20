@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">ԶԼՄ-ները մեր մասին</h2>
            </div>
{{ dd($massMedia->text_en) }}
            <form class="admin__form" action="{{ route('admin.about.mass-media.update', ['mass_medium' => $massMedia]) }}"
                method="POST">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                            <input class="admin-inp" type="text" id="text__en" name="text_en"
                                placeholder="Enter your text here" value="{{ $massMedia->text_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                            <input class="admin-inp" type="text" id="text__am" name="text_am"
                                placeholder="Enter your text here" value="{{ $massMedia->text_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                            <input class="admin-inp" type="text" id="text__ru" name="text_ru"
                                placeholder="Enter your text here" value="{{ $massMedia->text_ru }}">
                        </div>
                    </div>
                    <div class="inputs__group">
                        <span class="text-20 form__item_name">Photos</span>
                        <div class="flex admin__edit_imgs">
                            {{-- @foreach ($massMedia->imgs as $img)
                                <div class="admin__edit_img">
                                    <img src="{{ Storage::url($img->img) }}" alt="{{ $massMedia->id }}">
                                    <a class="admin__edit_img_delete"
                                        href="{{ route('admin.about.galleryImgDelete', ['id' => $img->id]) }}">
                                        <img class="img" src="/media/img/icons/delete.png" alt="delete">
                                    </a>
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                    
                    
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/js/admin/inputsAddMassMedia.js"></script>
@endsection
