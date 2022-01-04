@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի մասին</h2>
            </div>
            <form class="admin__form"
                action="{{ route('admin.about.rectors-page.update', ['rectors_page' => $rectorsPage]) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="form__text">
                    <div class="form__item">
                        <label class="text-20" for="text__en">Text English</label>
                        <textarea name="text_en" id="text__en">{{ $rectorsPage->text_en }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="text__am">Text Armenian</label>
                        <textarea name="text_am" id="text__am">{{ $rectorsPage->text_am }}</textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20" for="text__ru">Text Russian</label>
                        <textarea name="text_ru" id="text__ru">{{ $rectorsPage->text_ru }}</textarea>
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
