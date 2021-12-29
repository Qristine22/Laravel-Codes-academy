@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/partners.css">
    <link rel="stylesheet" href="/css/response/partners-response.css">
@endsection

@section('content')
    <main>
        <section class="partners section-text">
            <div class="wrapper">
                <div class="partners__cont">
                    <div class="partners__item" id="international">
                        <h2 class="partners__title">@lang('partners.international')</h2>
                        <div class="partners__items">
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/1.png" alt="1">
                                </a>
                                <h3 class="partner__name">Եվրոպայի խորհուրդ</h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/2.png" alt="2">
                                </a>
                                <h3 class="partner__name">
                                    ԵԽ «Մարդու իրավունքների կրթություն իրավական ոլորտի մասնագետների համար» ծրագիր
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/3.png" alt="3">
                                </a>
                                <h3 class="partner__name">ՄԱԿ-ի մանկական հիմնադրամ</h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/4.png" alt="4">
                                </a>
                                <h3 class="partner__name">
                                    ՄԱԿ Փախստականների հարցերով գերագույն հանձնակատարի հայաստանյան ներկայացուցչություն
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/5.png" alt="5">
                                </a>
                                <h3 class="partner__name">
                                    Դատական ոլորտի մասնագետների ուսուցման միջազգային կազմակերպություն
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/6.png" alt="6">
                                </a>
                                <h3 class="partner__name">
                                    Միջազգային հակակոռուպցիոն ակադեմիա
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/7.png" alt="7">
                                </a>
                                <h3 class="partner__name">
                                    Մարդկային զարգացման միջազգային կենտրոն
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/international/8.png" alt="8">
                                </a>
                                <h3 class="partner__name">
                                    Ռաուլ Վալլենբերգի անվան մարդու իրավունքների և մարդասիրական իրավունքի ինստիտուտի
                                    եվրոպական գրասենյակ
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="partners__item" id="foreign">
                        <h2 class="partners__title">@lang('partners.foreign')</h2>
                        <div class="partners__items">
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/foreign/1.png" alt="1">
                                </a>
                                <h3 class="partner__name">ՀՀ-ում ԱՄՆ դեսպանություն</h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/foreign/2.png" alt="2">
                                </a>
                                <h3 class="partner__name">Ուկրաինայի դատախազության ազգային ակադեմիա</h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/foreign/3.png" alt="3">
                                </a>
                                <h3 class="partner__name">
                                    Ղազախստանի Հանրապետության գերագույն դատարանին կից Արդարադատության ակադեմիա
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/foreign/4.png" alt="4">
                                </a>
                                <h3 class="partner__name">
                                    Ղազախստանի Հանրապետության գլխավոր դատախազությանն առընթեր իրավապահ մարմինների ակադեմիա
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/foreign/5.png" alt="5">
                                </a>
                                <h3 class="partner__name">
                                    Մոլդովայի Հանրապետության արդարադատության ազգային ինստիտուտ
                                </h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/foreign/6.png" alt="6">
                                </a>
                                <h3 class="partner__name">
                                    ՌԴ դատախազության համալսարան
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="partners__item" id="arm&artsakh">
                        <h2 class="partners__title">@lang('partners.arm&artsakh')</h2>
                        <div class="partners__items">
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/armenian&artsakh/1.png" alt="1">
                                </a>
                                <h3 class="partner__name">ՀՀ բարձրագույն դատական խորհուրդ</h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/armenian&artsakh/2.png" alt="2">
                                </a>
                                <h3 class="partner__name">ԼՂՀ դատարանների նախագահների խորհուրդ</h3>
                            </div>
                            <div class="partner__item">
                                <a class="partners__link" href="{{ route('partnerSingle', ['id' => 2]) }}">
                                    <img class="partner__img img" src="/media/img/partners/armenian&artsakh/3.png" alt="3">
                                </a>
                                <h3 class="partner__name">ՀՀ հատուկ քննչական ծառայություն</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
