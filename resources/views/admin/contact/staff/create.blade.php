@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Անձնակազմ</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.contact.staff.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="possition__en">Possition (English)</label>
                            <input class="admin-inp" type="text" id="possition__en" name="possition_en"
                                placeholder="Enter your text here" value="{{ old('possition_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="possition__am">Possition (Armenian)</label>
                            <input class="admin-inp" type="text" id="possition__am" name="possition_am"
                                placeholder="Enter your text here" value="{{ old('possition_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="possition__ru">Possition (Russian)</label>
                            <input class="admin-inp" type="text" id="possition__ru" name="possition_ru"
                                placeholder="Enter your text here" value="{{ old('possition_ru') }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <input class="admin-inp" type="text" id="name__en" name="name_en"
                                placeholder="Enter your text here" value="{{ old('name_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ old('name_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ old('name_ru') }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="mail">Mail</label>
                            <input class="admin-inp" type="text" id="mail" name="mail"
                                placeholder="Enter your text here" value="{{ old('mail') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="phone">Phone</label>
                            <input class="admin-inp" type="text" id="phone" name="phone"
                                placeholder="Enter your text here" value="{{ old('phone') }}">
                        </div>
                    </div>
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection