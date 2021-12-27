@extends('layouts.admin-main')

@section('content')
    <section class="admin-section">
        <div class="admin__head">
            <h2 class="admin__title">Ակադեմիայի կառավարման խորհուրդ</h2>
        </div>

        <form class="admin__form" action="{{ route('admin.about.governing-board-page.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <p class="error">{{ $e }}</p>
                @endforeach
            @endif
            <div class="form__text">
                <div class="form__item">
                    <label class="text-20" for="text__en">Text English</label>
                    <textarea name="text_en" id="text__en"></textarea>
                </div>
                <div class="form__item">
                    <label class="text-20" for="text__en">Text Armenian</label>
                    <textarea name="text_am" id="text__am"></textarea>
                </div>
                <div class="form__item">
                    <label class="text-20" for="text__en">Text Russian</label>
                    <textarea name="text_ru" id="text__ru"></textarea>
                </div>
            </div>
            <button class="form__btn">Save</button>
        </form>
    </section>
@endsection


@section('scripts')
    <script src="https://cdn.tiny.cloud/1/kq8av1qstz5kw9feupprnmtm1wehpvky0yrkarctqemoowkq/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="/js/admin/tinyCloud.js"></script>
@endsection
