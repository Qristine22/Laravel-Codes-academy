@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ռեկտորի Հրամաններ</h2>
            </div>
            <form class="admin__form"
                action="{{ route('admin.about.rectors-decree.update', ['rectors_decree' => $rectorsDecree]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form__text">
                    <div class="flex inputs__group">
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__en">Text (English)</label>
                            <input class="admin-inp" type="text" id="text__en" name="text_en"
                                placeholder="Enter your text here" value="{{ $rectorsDecree->text_en }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__am">Text (Armenian)</label>
                            <input class="admin-inp" type="text" id="text__am" name="text_am"
                                placeholder="Enter your text here" value="{{ $rectorsDecree->text_am }}">
                        </div>
                        <div class="form__item form__item-inp">
                            <label class="text-20 form__item_name" for="text__ru">Text (Russian)</label>
                            <input class="admin-inp" type="text" id="text__ru" name="text_ru"
                                placeholder="Enter your text here" value="{{ $rectorsDecree->text_ru }}">
                        </div>
                    </div>
                    <div class="form__text">
                        <div class="flex inputs__group">
                            <div class="form__item form__item-inp">
                                <label class="text-20 form__item_name" for="pdf__name">File name</label>
                                <input class="admin-inp" type="text" id="pdf__name" name="pdf_name"
                                    placeholder="Enter your text here" value="{{ $rectorsDecree->pdf_name }}">
                            </div>
                            <div class="form__item form__item-inp">
                                <span class="text-20 form__item_name">file</span>
                                <label class="text-20 admin-inp admin-inp-file" for="pdf">Attach your File</label>
                                <input class="admin-file" type="file" id="pdf" name="pdf">
                            </div>
                        </div>
                    </div>
                </div>



                <input type="hidden" name="pdfHidden" value="{{ $rectorsDecree->pdf }}">
                <button class="form__btn">Save</button>
            </form>
        </section>
    </div>
@endsection