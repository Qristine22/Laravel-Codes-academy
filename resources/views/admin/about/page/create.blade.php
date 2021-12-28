@extends('layouts.admin-main')

@section('content')
    <div class="admin__sections">
        <section class="admin-section">
            <div class="admin__head">
                <h2 class="admin__title">Ակադեմիայի մասին</h2>
            </div>

            <form class="admin__form" action="{{ route('admin.about.page.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <p class="error">{{ $e }}</p>
                    @endforeach
                @endif
                <div class="form__text">
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="about__en">About English</label>
                        <textarea name="about_en" id="about__en" placeholder="Enter Your Text Here"></textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="about__am">About Armenian</label>
                        <textarea name="about_am" id="about__am" placeholder="Enter Your Text Here"></textarea>
                    </div>
                    <div class="form__item">
                        <label class="text-20 form__item_name" for="about__ru">About Russian</label>
                        <textarea name="about_ru" id="about__ru" placeholder="Enter Your Text Here"></textarea>
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
