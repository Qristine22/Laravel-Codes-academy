@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Տեսադարան</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.library.criminal-procedure-codes.store') }}" method="POST"
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
                            <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                            <input class="admin-inp" type="text" id="text__en" name="text_en"
                                   placeholder="Enter your text here" value="{{ old('text_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                            <input class="admin-inp" type="text" id="text__am" name="text_am"
                                   placeholder="Enter your text here" value="{{ old('text_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                            <input class="admin-inp" type="text" id="text__ru" name="text_ru"
                                   placeholder="Enter your text here" value="{{ old('text_ru') }}">
                        </div>
                    </div>
                    <div class="flex inputs__group">
                       <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="full_date">Full date</label>
                            <input class="admin-inp" type="text" id="full_date" name="full_date"
                                   placeholder="Enter your text here" value="{{ old('full_date') }}">
                       </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="year">Year</label>
                            <input class="admin-inp" type="text" id="year" name="year"
                                   placeholder="Enter your text here" value="{{ old('year') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="link">Video Link</label>
                            <input class="admin-inp" type="text" id="link" name="link"
                                   placeholder="Enter your text here" value="{{ old('link') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Syllabus pdf</span>
                            <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="syllabus__pdf">Attach your File</label>
                            <input class="admin-file admin-file-pdf" type="file" id="syllabus__pdf" name="syllabus_pdf">
                        </div>
                        <div class="form__item form__item-inp">
                            <span class="text-20 form__item_name">Select Subtitle</span>
                            <select name="type">
                                <option value="1">{{ __('criminal-procedure-codes.new_ra_criminal_code') }}</option>
                                <option value="2">{{ __('criminal-procedure-codes.new_ra_criminal_procedure_code') }}</option>
                                <option value="3">{{ __('criminal-procedure-codes.new_codes') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="syllabus_pdf_name__en">syllabus pdf name (English)</label>
                            <input class="admin-inp" type="text" id="syllabus_pdf_name__en" name="syllabus_pdf_name_en"
                                   placeholder="Enter your text here" value="{{ old('syllabus_pdf_name_en') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="syllabus_pdf_name__am">
                                syllabus pdf name (Armenian)
                            </label>
                            <input class="admin-inp" type="text" id="syllabus_pdf_name__am" name="syllabus_pdf_name_am"
                                   placeholder="Enter your text here" value="{{ old('syllabus_pdf_name_am') }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="syllabus_pdf_name__ru">syllabus pdf name (Russian)</label>
                            <input class="admin-inp" type="text" id="syllabus_pdf_name__ru" name="syllabus_pdf_name_ru"
                                   placeholder="Enter your text here" value="{{ old('syllabus_pdf_name_ru') }}">
                        </div>
                    </div>
{{--                    <div class="flex inputs__group">--}}
{{--                        <div class="form__item form__item-inp">--}}
{{--                            <span class="text-20 form__item_name">Syllabus pdf</span>--}}
{{--                            <label class="text-20 admin-inp admin-inp-file admin-inp-pdf" for="syllabus__pdf">Attach your File</label>--}}
{{--                            <input class="admin-file admin-file-pdf" type="file" id="syllabus__pdf" name="syllabus_pdf">--}}
{{--                        </div>--}}
{{--                        <div class="form__item form__item-inp">--}}
{{--                            <span class="text-20 form__item_name">Select Subtitle</span>--}}
{{--                            <select name="type">--}}
{{--                                <option value="1">{{ __('criminal-procedure-codes.new_ra_criminal_code') }}</option>--}}
{{--                                <option value="2">{{ __('criminal-procedure-codes.new_ra_criminal_procedure_code') }}</option>--}}
{{--                                <option value="3">{{ __('criminal-procedure-codes.new_codes') }}</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="/js/admin/inputsAdd.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/js/admin/inputsFileReader/imgReader.js"></script>
    <script src="/js/admin/inputsFileReader/pdfReader.js"></script>
@endsection
