@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի շրջանավարտներ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.graduates.update', ['graduate' => $graduate]) }}" method="POST"
                enctype="multipart/form-data">
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
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <input class="admin-inp" type="text" id="name__en" name="name_en"
                                placeholder="Enter your text here" value="{{ $graduate->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $graduate->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $graduate->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="info__en">Info (English)</label>
                            <input class="admin-inp" type="text" id="info__en" name="info_en"
                                placeholder="Enter your text here" value="{{ $graduate->info_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="info__am">Info (Armenian)</label>
                            <input class="admin-inp" type="text" id="info__am" name="info_am"
                                placeholder="Enter your text here" value="{{ $graduate->info_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="info__ru">Info (Russian)</label>
                            <input class="admin-inp" type="text" id="info__ru" name="info_ru"
                                placeholder="Enter your text here" value="{{ $graduate->info_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your Photo</label>
                            <input class="admin-file" type="file" id="img" name="img">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position">Position</label>
                            <select class="admin-inp" name="position" id="position">
                                <option value="judge" @if($graduate->position == 'judge') selected @endif>judge</option>
                                <option value="prosecutor" @if($graduate->position == 'prosecutor') selected @endif>prosecutor</option>
                                <option value="investigator" @if($graduate->position == 'investigator') selected @endif>investigator</option>
                            </select>
                        </div>
                    </div>
                </div>


                <input type="hidden" name="imgHidden" value="{{ $graduate->img }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection