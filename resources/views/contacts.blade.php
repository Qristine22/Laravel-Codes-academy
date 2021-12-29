@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/response/contacts-response.css">
@endsection

@section('content')
    <main>
        <section class="contacts section-text">
            <div class="wrapper">
                <div class="contacts__top flex">
                    <div class="contacts__block">
                        <div class="contacts__map">
                            <iframe class="img contacts__map_iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.5215063186283!2d44.496839060420236!3d40.21970557552195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a97fe331a7b65%3A0xc221f33da2130e48!2z1LHVkNS01LHVkNSx1LTUsdWP1YjVktS51YXUsdWGINSx1L_UsdS01LXVhNS71LEgKEFjYWRlbXkgb2YgSnVzdGljZSk!5e0!3m2!1sru!2s!4v1639650221284!5m2!1sru!2s"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="contacts__info">
                            <h3 class="contacts__title text-26">@lang('contact.contacts')</h3>
                            <div class="contacts__about">
                                <span class="contacts__about_name text-20">@lang('contact.address')</span>
                                <span class="contacts__about_info text-20">
                                    ՀՀ, ք. Երևան, 0054, Փիրումյանների փող. 9
                                </span>
                            </div>
                            <div class="contacts__about">
                                <span class="contacts__about_name text-20">@lang('contact.mail')</span>
                                <span class="contacts__about_info text-20">info@justiceacademy.am</span>
                            </div>
                            <div class="contacts__about">
                                <span class="contacts__about_name text-20">@lang('contact.tel')</span>
                                <span class="contacts__about_info text-20">+374-60-460087</span>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__block contacts__message">
                        <h3 class="contacts__title text-26">@lang('contact.message-to-the-Rector')</h3>
                        <form class="contacts__form" action="#">
                            <div class="contacts__form_inps flex">
                                <input class="inp text-18 contacts__inp contacts__inp-top" type="text" name="name"
                                    placeholder="@lang('contact.name-placeholder')">
                                <input class="inp text-18 contacts__inp contacts__inp-top" type="text" name="mail"
                                    placeholder="@lang('contact.mail-placeholder')">
                            </div>
                            <div class="contacts__form_inps flex">
                                <input class="inp text-18 contacts__inp" type="text" name="topic"
                                    placeholder="@lang('contact.topic-placeholder')">
                            </div>
                            <div class="contacts__form_inps flex">
                                <textarea class="contacts__textarea inp text-18 contacts__inp" name="content"
                                    placeholder="@lang('contact.content-placeholder')"></textarea>
                            </div>
                            <div class="contacts__form_inps flex">
                                <button class="contacts__btn text-18">
                                    <span class="contacts__btn_span">@lang('contact.send')</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="staff section-text">
            <div class="wrapper">
                <h3 class="contacts__title text-26">@lang('contact.staff')</h3>
                <div class="staff__cont flex">
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Ռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Սերգեյ Առաքելյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">rector@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Ռեկտորի ընդունարան</h3>
                            <h3 class="staff__item_bold text-18">
                                Անահիտ Մարգարյան (ռեկտորի օգնական - Կառավարման խորհրդի քարտուղար)
                            </h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">rector@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Ֆինանսական բաժնի ղեկավար-գլխավոր հաշվապահ</h3>
                            <h3 class="staff__item_bold text-18">Նարինե Հարությունյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">rector@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Ռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Սերգեյ Առաքելյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">rector@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Ռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Սերգեյ Առաքելյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">rector@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Ռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Սերգեյ Առաքելյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">rector@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Պրոռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Աշոտ Հայրապետյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">ashot.hayrapetyan@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Պրոռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Աշոտ Հայրապետյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">ashot.hayrapetyan@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Հեռաուսուցման և ՏՏ դեպարտամենտի ղեկավար</h3>
                            <h3 class="staff__item_bold text-18">Արտաշես Խուրշուդյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">ashot.hayrapetyan@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Պրոռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Աշոտ Հայրապետյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">ashot.hayrapetyan@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">Պրոռեկտոր</h3>
                            <h3 class="staff__item_bold text-18">Աշոտ Հայրապետյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">ashot.hayrapetyan@justiceacademy.am</span>
                        </div>
                    </div>
                    <div class="staff__block_item">
                        <div class="staff__item_top">
                            <h3 class="staff__item_bold text-20">
                                Գիտահետազոտական և ծրագրամեթոդական աշխատանքների կազմակերպման բաժնի ղեկավար
                            </h3>
                            <h3 class="staff__item_bold text-18">Գևորգ Իսրայելյան</h3>
                        </div>
                        <div class="staff__item_bot">
                            <span class="staff__item_info text-18">060 46 00 87</span>
                            <span class="staff__item_info text-18">ashot.hayrapetyan@justiceacademy.am</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
