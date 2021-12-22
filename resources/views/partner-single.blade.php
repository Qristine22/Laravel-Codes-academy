@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/partners.css">
    <link rel="stylesheet" href="/css/response/partners-response.css">
@endsection

@section('header-bot')
    @include("includes.partners.header-bot")
@endsection

@section('content')
    <main>
        <section class="partner section-text section-top">
            <div class="wrapper">
                <div class="partner__cont">
                    <div class="partner__top flex">
                        <div class="partner__img">
                            <img class="img" src="/media/img/partners/international/1.png" alt="1">
                        </div>
                        <h2 class="partners__title partner-single__name">Եվրոպայի խորհուրդ</h2>
                    </div>
                    <div class="partner__info">
                        <p class="text-18 margin__par">
                            Արդարադատության ակադեմիայի և Միջազգային հակակոռուպցիոն ակադեմիայի միջև համագործակցությունն
                            իրավական հիմքերի վրա դրվեց 2015 թվականի դեկտեմբերին: Վիեննայում անցկացված Միջազգային
                            հակակոռուպցիոն ակադեմիայի 4-րդ խորհրդաժողովի ընթացքում Ակադեմիայի ռեկտորը և Միջազգային
                            հակակոռուպցիոն ակադեմիայի տնօրեն և գործադիր քարտուղար Մարտին Կրոյտները համագործակցության
                            վերաբերյալ հուշագիր ստորագրեցին:
                        </p>
                        <p class="text-18 margin__par">
                            Հայաստանի Հանրապետությունը 2014թ. մարտի 15-ից պաշտոնապես հանդիսանում է Միջազգային
                            հակակոռուպցիոն ակադեմիայի անդամ: Հեղինակավոր այս կառույցի գործունեությունն ուղղված է
                            կոռուպցիան կանխելուն եւ արդյունավետ կերպով հաղթահարելուն՝ այդ նպատակի իրականացման համար
                            ապահովելով հակակոռուպցիոն կրթության եւ մասնագիտական վերապատրաստումների հնարավորություն,
                            նախաձեռնելով կոռուպցիայի ոլորտին վերաբերող տարբեր ուսումնասիրություններ, տրամադրելով
                            տեխնիկական աջակցություն, ինչպես նաեւ խրախուսել կոռուպցիայի դեմ պայքարին ուղղված միջազգային
                            համագործակցությունն ու կապերի հաստատումը։
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-text partners__bot">
            <div class="wrapper">
                <div class="link__pdfs">
                    <a class="link__pdf flex" href="#">
                        <span class="text-18">Հուշագիր</span>
                        <div class="link__pdf_icon">
                            <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                            <span class="link__pdf_span text-18">Ներբեռնել</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
