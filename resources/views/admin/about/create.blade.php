@extends('layouts.admin-main')

@section('content')
    <section class="admin-section">
        <div class="admin__head">
            <h2 class="admin__title">Ակադեմիայի մասին</h2>
        </div>

        <form class="admin__form" action="{{ route('admin.about.store') }}" method="POST">
            @csrf
            <div class="form__text">
                <div class="form__item">
                    <label class="text-20" for="about__en">About english</label>
                    <textarea name="about_en" id="about__en"></textarea>
                </div>
                <div class="form__item">
                    <label class="text-20" for="about__en">About armenian</label>
                    <textarea name="about_am" id="about__am"></textarea>
                </div>
                <div class="form__item">
                    <label class="text-20" for="about__en">About russian</label>
                    <textarea name="about_ru" id="about__ru"></textarea>
                </div>
            </div>
            <button class="form__btn">send</button>
        </form>
    </section>
@endsection


@section('scripts')
    <script src="https://cdn.tiny.cloud/1/kq8av1qstz5kw9feupprnmtm1wehpvky0yrkarctqemoowkq/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="/js/admin/tinyCloud.js"></script>
@endsection
