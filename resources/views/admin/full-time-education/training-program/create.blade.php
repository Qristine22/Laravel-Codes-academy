@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ուսուցման ծրագրեր</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.full.time.education.training-program.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
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
                            <label class="text-20 form__item_name" for="position">Position</label>
                            <select class="admin-inp" name="position" id="position">
                                <option value="judge">Դատական համակարգի ունկնդիրների ուսուցում</option>
                                <option value="prosecutor">Դատախազության համակարգի ունկնդիրների ուսուցում</option>
                                <option value="investigator">Քննչական համակարգի ունկնդիրների ուսուցում</option>
                            </select>
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                placeholder="Enter your text here" value="{{ old('year') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">file</span>
                            <label class="text-20 admin-inp admin-inp-file" for="pdf">Attach your File</label>
                            <input class="admin-file" type="file" id="pdf" name="pdf">
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="form__item">
                            <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                            <textarea name="text_en" id="text__en" placeholder="Enter Your Text Here">
                                {{ old('text_en') }}
                            </textarea>
                        </div>
                    </div>
                </div>
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
