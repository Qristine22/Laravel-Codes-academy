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
        <section class="section-text section-top">
            <div class="wrapper">
                <div class="rector__cont">
                    <h3 class="bold__title text-20">
                        Ակադեմիայի ընթացիկ գործունեության ղեկավարումն իրականացնում է գործադիր մարմինը` Ակադեմիայի
                        ռեկտորը
                    </h3>
                    <div class="rector__inner">
                        <p class="margin__par text-20">Ռեկտորի պաշտոնը կարող է զբաղեցնել իրավագիտության բնագավառում
                            գիտական աստիճան
                            ունեցող, հայերենին տիրապետող ՀՀ քաղաքացի, որն ունի իրավունքի բնագավառում առնվազն 10 տարվա
                            աշխատանքային և մանկավարժական գործունեության առնվազն 2 տարվա ստաժ:
                        </p>
                        <p class="margin__par text-20">Ռեկտորն ընտրվում է Խորհրդի կողմից ՀՀ օրենսդրությամբ և Ակադեմիայի
                            Կանոնադրությամբ սահմանված բաց մրցույթի կարգով՝ գաղտնի քվեարկությամբ, Խորհրդի անդամների
                            առնվազն հինգ ձայնով ընդունված որոշմամբ:
                        </p>
                        <p class="margin__par text-20">Եթե Խորհուրդը Ռեկտորի պաշտոնի համար թեկնածուների հայտերի
                            ընդունման ժամկետի
                            ավարտից հետո` երկշաբաթյա ժամկետում, ներկայացված հայտերի թվից չի ընտրում Ռեկտոր, ապա Ռեկտորին
                            նշանակում է ՀՀ վարչապետը` հայտ ներկայացրած թեկնածուների թվից: Եթե տվյալ դեպքում վարչապետը
                            երկշաբաթյա ժամկետում չի նշանակում Ռեկտոր, ապա Խորհուրդը հայտարարում է նոր մրցույթ:
                        </p>
                        <p class="margin__par text-20">Ռեկտորի լիազորությունների ժամկետը հինգ տարի է։ Միևնույն անձը չի
                            կարող ավելի
                            քան երկու անգամ անընդմեջ նշանակվել Ռեկտորի պաշտոնում:
                        </p>
                        <p class="margin__par text-20">Ռեկտորի լիազորությունների դադարեցման, կասեցման կամ պաշտոնը թափուր
                            մնալու
                            դեպքում այդ լիազորությունները ժամանակավորապես իրականացնում է Կանոնադրությամբ Ռեկտորին
                            փոխարինելու իրավասություն ունեցող անձը:
                        </p>
                        <p class="margin__par text-20">Ռեկտորը չի կարող զբաղեցնել այլ պաշտոն կամ կատարել այլ վճարովի
                            աշխատանք, բացի
                            գիտական, մանկավարժական և ստեղծագործական աշխատանքից:
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-text rector__bot">
            <div class="wrapper">
                <div class="rector__bot_cont">
                    <a class="about__link text-18" href="{{ route('rectorsDecrees') }}">Ռեկտորի հրամանները</a>
                    <a class="about__link text-18" href="{{ route('rectorsBiography') }}">Ռեկտորի կենսագրություն</a>
                    <a class="about__link text-18" href="{{ route('formerRectorsBiography') }}">Ակադեմիայի նախկին
                        Ռեկտոր</a>
                </div>
            </div>
        </section>
    </main>
@endsection
