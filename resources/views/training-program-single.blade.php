@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="pdfs section-text section-top">
            <div class="wrapper">
                <div class="pdfs__cont">
                    <h3 class="pdfs__title">Դատական համակարգի ունկնդիրների ուսուցում - 2021</h3>
                    <div class="pdf__item training__pdf">
                        <h3 class="bold__title training-program__title text-20">
                            Դատավորների և դատավորների թեկնածուների ցուցակում ընդգրկված անձանց տարեկան վերապատրաստման
                            ուսուցման ծրագիր
                        </h3>
                        <div class="pdf__item_inner flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    Ուսուցման ծրագիրը ներառում է դատավորների և դատավորների թեկնածուների ցուցակում ընդգրկված
                                    անձանց 2021 թվականի վերապատրաստման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության
                                    ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։
                                    Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից «Արդարադատության ակադեմիայի մասին»
                                    ՀՀ օրենքի 19-րդ հոդվածի դրույթների հիման վրա:
                                </p>
                            </div>
                            <div class="pdf__item_icon">
                                <a href="#">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.download')
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pdf__item training__pdf">
                        <h3 class="bold__title training-program__title text-20">
                            Դատավորների հատուկ ուսուցման ծրագիր
                        </h3>
                        <div class="pdf__item_inner flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    Ուսուցման ծրագիր ներառում է դատավորների 2021թ. հատուկ ուսուցման կրթական չափորոշիչները,
                                    ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները, ինչպես նաև դասավանդվող
                                    առարկայական կուրսի համառոտ նկարագիրը։
                                    Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից «Արդարադատության ակադեմիայի մասին»
                                    ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:
                                </p>
                            </div>
                            <div class="pdf__item_icon">
                                <a href="#">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.download')
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pdf__item training__pdf">
                        <h3 class="bold__title training-program__title text-20">
                            Դատական կարգադրիչների վերապատրաստման և հատուկ ուսուցման ծրագիր
                        </h3>
                        <div class="pdf__item_inner flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    Ուսուցման ծրագիրը ներառում է դատական կարգադրիչների 2021 թ. վերապատրաստման և հատուկ
                                    ուսուցման կրթական չափորոշիչները, ուսուցման ձևը, ուսումնառության ժամաքանակը և ժամկետները,
                                    ինչպես նաև դասավանդվող առարկայական կուրսերի համառոտ նկարագիրը։
                                    Ծրագիրը մշակվել է «Արդարադատության ակադեմիայի մասին» ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:
                                </p>
                            </div>
                            <div class="pdf__item_icon">
                                <a href="#">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.download')
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pdf__item training__pdf">
                        <h3 class="bold__title training-program__title text-20">
                            Դատավորների և դատավորների թեկնածուների ցուցակում ընդգրկված անձանց տարեկան վերապատրաստման
                            ուսուցման ծրագիր
                        </h3>
                        <div class="pdf__item_inner flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    Ուսուցման ծրագիրը ներառում է դատավորների թեկնածուների հավակնորդների 2021թ. ցուցակում
                                    ընդգրկված անձանց մասնագիտական պատրաստման կրթական չափորոշիչները, ուսուցման ձևը,
                                    ուսումնառության ժամաքանակը և ժամկետները, գնահատման եղանակը, ինչպես նաև դասավանդվող
                                    առարկայական կուրսերի համառոտ նկարագիրը։
                                    Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ «Արդարադատության ակադեմիայի մասին»
                                    ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:
                                </p>
                            </div>
                            <div class="pdf__item_icon">
                                <a href="#">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.download')
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pdf__item training__pdf">
                        <h3 class="bold__title training-program__title text-20">
                            Քրեական մասնագիտացմամբ դատավորների թեկնածուների հավակնորդների ցուցակում ընդգրկված անձանց
                            մասնագիտական պատրաստման ուսուցման ծրագիր
                        </h3>
                        <div class="pdf__item_inner flex">
                            <div class="pdf__item_cont">
                                <p class="pdf__name text-18">
                                    Ուսուցման սույն ծրագիրը ներառում է դատավորների թեկնածուների հավակնորդների 2021-2022 թթ.
                                    ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման կրթական չափորոշիչները, ուսուցման ձևը,
                                    ուսումնառության ժամաքանակը և ժամկետները, գնահատման եղանակը, ինչպես նաև դասավանդվող
                                    առարկայական կուրսերի համառոտ նկարագիրը։
                                    Ծրագիրը մշակվել է Արդարադատության ակադեմիայի կողմից՝ «Արդարադատության ակադեմիայի մասին»
                                    ՀՀ օրենքի 19-րդ հոդվածի հիման վրա:
                                </p>
                            </div>
                            <div class="pdf__item_icon">
                                <a href="#">
                                    <img class="pdf__item_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                    <span class="pdf__item_span text-18">
                                        @lang('main.download')
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
