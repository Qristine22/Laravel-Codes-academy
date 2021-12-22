@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
@endsection

@section('header-bot')
    @include("includes.about.header-bot")
@endsection

@section('content')
    <main>
        <section class="structure section-top">
            <div class="wrapper">
                <div class="structure__cont">
                    <img class="structure__img" src="/media/img/about/bgs/structure.png" alt="structure">
                    <a class="structure__btn structure__governing-board" href="#">
                        <span class="structure__span">Կառավարման Խորհուրդ</span>
                    </a>
                    <a class="structure__btn structure__rector" href="#">
                        <span class="structure__span">ռեկտոր</span>
                    </a>
                    <a class="structure__btn structure__mid_link structure__advisor" href="#">
                        <span class="structure__span">Ռեկտորի <br>խորհրդական</a></span>
                    <a class="structure__btn structure__mid_link structure__vice-rector" href="#">
                        <span class="structure__span">Պրոռեկտոր</span>
                    </a>
                    <a class="structure__btn structure__mid_link structure__chief" href="#">
                        <span class="structure__span">Աշխատակազմի <br>ղեկավար</span>
                    </a>
                    <a class="structure__btn structure__mid_link structure__it" href="#">
                        <span class="structure__span">Հեռաուսուցման եվ <br>տտ դեպարտամենտ</span>
                    </a>
                    <a class="structure__btn structure__small_link-left structure__scientific-research" href="#">
                        <span class="structure__span">
                            Գիտահետազոտական և <br>ծրագրամեթոդական աշխատանքների <br>կազմակերպման բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-left structure__judiciary" href="#">
                        <span class="structure__span">
                            Դատախազության և քննչական <br>համակարգի ունկնդիրների ուսուցման <br>կազմակերպման բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-left structure__prosecutorial" href="#">
                        <span class="structure__span">
                            Դատական համակարգի ունկնդիրների <br>ուսուցման կազմակերպման բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-center structure__bulletin" href="#">
                        <span class="structure__span">
                            «Բանբեր <br>Արդարադատության <br>ակադեմիայի»
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-center structure__library" href="#">
                        <span class="structure__span">
                            Գրադարան
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-center structure__publishing" href="#">
                        <span class="structure__span">
                            Հրատարակչություն
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-right structure__finance" href="#">
                        <span class="structure__span">
                            Ֆինանսական բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-right structure__cooperation" href="#">
                        <span class="structure__span">
                            Համագործակցության և հանրային կապերի բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-right structure__staff" href="#">
                        <span class="structure__span">
                            Անձնակազմի և փաստաթղթա-շրջանառության բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-right structure__tehchnic" href="#">
                        <span class="structure__span">
                            Տեխնիկատնտեսական բաժին
                        </span>
                    </a>
                    <a class="structure__btn structure__small_link-right structure__hotel" href="#">
                        <span class="structure__span">
                            Հյուրանոց
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
