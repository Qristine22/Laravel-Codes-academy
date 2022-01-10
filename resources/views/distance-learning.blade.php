@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
@endsection

@section('header-bot')
    @include("includes.header-bot")
@endsection

@section('content')
    <main>
        <section class="distance-learning section section-text">
            <div class="wrapper">
                <div class="section-text__cont">
                    <p class="margin__par text-18">
                        Հեռաուսուցումն ուսուցման (վերապատրաստման) կազմակերպման ժամանակակից և մեծ տարածում գտած ձև է, որը
                        տասնամյակներ շարունակ փաստել և փաստում է իր արդյունավետությունը: Պատահական չէ, որ զարգացած
                        երկրներում հետևողականորեն ներդրվում են հեռաուսուցման համակարգեր, որոնք նաև կոչված են մեղմելու կամ
                        հաղթահարելու հարափոփոխ կյանքի մարտահրավերները:
                    </p>
                    <p class="margin__par text-18">
                        Հեռաուսուցումն ունի իրականացման իր ուրույն մեթոդոլոգիան և ուսուցման (վերապատրաստման) կազմակերպման
                        այս ձևի հաջողված կամ արդյունավետ լինելը մեծապես կախված է իր իրականացման միջոցներից մեկի՝
                        համապատասխան առարկայի հեռաուսուցման փաթեթի որակից:
                    </p>
                    <p class="margin__par text-18">
                        Հեռաուսուցման փաթեթը հեռաուսուցման ձևաչափով կրթության, ուսուցման կամ վերապատրաստման գործընթաց
                        կազմակերպելու համար անհրաժեշտ նյութերի ամբողջությունն է: Այդ փաթեթը բաղկացած է.
                    </p>
                    <ul class="info__list">
                        <li class="info__item_dot">
                            <p class="text-18">
                                ուսումնական ձեռնարկ/մոդուլ – հիմնական նյութն է, որը բովանդակում է առարկայի յուրացման համար
                                անհրաժեշտ մասնագիտական և միջգիտակարգային տեղեկատվություն, բառարան, գրականության ցանկ,
                                ինքնաստուգիչ հարցեր և համապատասխան առաջադրանքներ,
                            </p>
                        </li>
                        <li class="info__item_dot">
                            <p class="text-18">
                                առարկայի տերմինների բառարան – բովանդակում է բոլոր այն հասկացությունները, որոնց իմացությունն
                                անհրաժեշտ է համապատասխան տեքստը կամ դասը հավուր պատշաճի յուրացնելու համար,
                            </p>
                        </li>
                        <li class="info__item_dot">
                            <p class="text-18">
                                մեդիա-նյութեր (տեղեկատվություն փոխանցող բոլոր միջոցներից` գրքեր, հոդվածներ, ֆիլմեր,
                                տեսանյութեր և այլն) – ուսումնական ձեռնարկի-մոդուլի յուրաքանչյուր դասի առավել արդյունավետ
                                յուրացմանը միտված տարաբնույթ նյութեր են,
                            </p>
                        </li>
                        <li class="info__item_dot">
                            <p class="text-18">
                                ինքնաստուգիչ հարցերի պատասխանների գրքույկ – ուսումնական ձեռնարկի/մոդուլի ինքնաստուգիչ
                                հարցերին վերաբերող առանձին փաստաթուղթ է, որն ունի առավելապես բացատրական բնույթ: Սույն
                                գրքույկի միջոցով հնարավորություն կունենաք իմանալ ինքնաստուգիչ հարցերի ճիշտ պատասխանները,
                                ինչպես նաև հնարավորինս մանրամասն ծանոթանալ համապատասխան տարբերակների ճիշտ կամ սխալ լինելու
                                մասնագիտական բացատրությանը,
                            </p>
                        </li>
                        <li class="info__item_dot">
                            <p class="text-18">
                                հեռաուսուցման փաթեթից օգտվելու ուղեցույց (Study guide) – բովանդակում է հեռաուսուցման
                                ձեռնարկից/մոդուլից (Reader) արդյունավետ օգտվելու համար անհրաժեշտ տեղեկատվություն:
                                Հեռաուսուցման փաթեթից օգտվելու ուղեցույցն ունի առավելապես մեթոդաբանական և կողմնորոշիչ
                                նշանակություն ու նախատեսված է ունկնդիրների/վերապատրաստվողների համար,
                            </p>
                        </li>
                        <li class="info__item_dot">
                            <p class="text-18">
                                ուսումնական ծրագիրը - այս փաստաթուղթը Ձեզ հնարավորություն կտա ծանոթանալ կոնկրետ դասընթացի
                                ընդհանուր բնութագրին, նպատակներին և ակնկալվող ելքային արդյունքներին, գնահատման եղանակին,
                                հեռաուսուցման կազմակերպման ձևին կամ մեթոդին, կառուցվածքին և գրականության ցանկին,
                            </p>
                        </li>
                        <li class="info__item_dot">
                            <p class="text-18">
                                ուսումնական պլանը - այս փաստաթղթի միջոցով Դուք կարող եք ծանոթանալ դասընթացի (դասընթացով
                                նախատեսված գործողությունների) ժամանակացույցին` առաջադրանքների հանձնարարման և կատարման,
                                հնարավոր առերես հանդիպման ժամկետներին և այլն:
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-text rector__bot">
            <div class="wrapper">
                <div class="rector__bot_cont">
                    <a class="about__link text-18" href="{{ route('distanceLearningVideo') }}">
                        ԱՄՆ Դաշնային դատական կենտրոնի միջազգային դատական կապերի գծով ղեկավարի հարցազրույցը
                        Արդարադատության ակադեմիայի հեռաուսուցման ծրագրերի և նյութերի մասին
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
