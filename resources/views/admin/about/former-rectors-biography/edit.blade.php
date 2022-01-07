@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Նախկին Ռեկտորի կենսագրություն</h2>
            </div>

            <form class="admin__form"
                action="{{ route('admin.about.former-rectors-biography.update',
                ['former_rectors_biography' => $formerRectorsBiography]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__en">Name (English)</label>
                            <input class="admin-inp" type="text" id="name__en" name="name_en"
                                placeholder="Enter your text here" value="{{ $formerRectorsBiography->name_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__am">Name (Armenian)</label>
                            <input class="admin-inp" type="text" id="name__am" name="name_am"
                                placeholder="Enter your text here" value="{{ $formerRectorsBiography->name_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="name__ru">Name (Russian)</label>
                            <input class="admin-inp" type="text" id="name__ru" name="name_ru"
                                placeholder="Enter your text here" value="{{ $formerRectorsBiography->name_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position__en">Position (English)</label>
                            <input class="admin-inp" type="text" id="position__en" name="position_en"
                                placeholder="Enter your text here" value="{{ $formerRectorsBiography->position_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position__am">Position (Armenian)</label>
                            <input class="admin-inp" type="text" id="position__am" name="position_am"
                                placeholder="Enter your text here" value="{{ $formerRectorsBiography->position_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="position__ru">Position (Russian)</label>
                            <input class="admin-inp" type="text" id="position__ru" name="position_ru"
                                placeholder="Enter your text here" value="{{ $formerRectorsBiography->position_ru }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Photo</span>
                            <label class="text-20 admin-inp admin-inp-file" for="img">Attach your File</label>
                            <input class="admin-file" type="file" id="img" name="img">
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="biography__en">Biography (English)</label>
                            <textarea name="biography_en" id="biography__en" placeholder="Enter Your Text Here">
                                {{ $formerRectorsBiography->biography_en }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="biography__am">Biography (Armenian)</label>
                            <textarea name="biography_am" id="biography__am" placeholder="Enter Your Text Here">
                                {{ $formerRectorsBiography->biography_am }}
                            </textarea>
                        </div>
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="biography__ru">Biography (Russian)</label>
                            <textarea name="biography_ru" id="biography__ru" placeholder="Enter Your Text Here">
                                {{ $formerRectorsBiography->biography_ru }}
                            </textarea>
                        </div>
                    </div>
                </div>


                <input type="hidden" name="imgHidden" value="{{ $formerRectorsBiography->img }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="https://cdn.tiny.cloud/1/kq8av1qstz5kw9feupprnmtm1wehpvky0yrkarctqemoowkq/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="/js/admin/tinyCloud.js"></script>
@endsection