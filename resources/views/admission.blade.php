<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ</title>
    <link rel="icon" type="image/x-icon" href="/media/img/logo/brownLogo.png">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/response/all-response.css">
    <link rel="stylesheet" href="/css/response/about-response.css">
</head>

<body>
    @include("includes.header")
    @include("includes.about.header-bot")

    <main>
        <div class="admission__cont">
            <section class="section-text section-top">
                <div class="wrapper">
                    <div class="rector__cont">
                        <div class="rector__inner">
                            <p class="margin__par text-20">
                                «Արդարադատության ակադեմիայի մասին» ՀՀ օրենքի 3-րդ հոդվածի 1-ին մասի 1-ին կետի համաձայն՝ Ակադեմիան ի թիվս այլ գործառույթների կազմակերպում և անցկացնում է որակավորման ստուգման արդյունքներով դատավորների թեկնածուների հավակնորդների, քննիչների և դատախազների թեկնածությունների ցուցակներում ընդգրկված անձանց մասնագիտական պատրաստումը: Ակադեմիայում մասնագիտական պատրաստում անցնելու նպատակով դատավորների թեկնածուների հավակնորդների, դատախազների և քննիչների թեկնածությունների ցուցակներում ընդգրկվելու համար սահմանված է հետևյալ կարգը.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-text rector__bot">
                <div class="wrapper">
                    <div class="rector__bot_cont">
                        <a class="about__link text-18" href="{{ route('judgesCandidates') }}">
                            Դատավորի թեկնածուի հավակնորդներ
                        </a>
                        <a class="about__link text-18" href="{{ route('judgesCandidates') }}">Դատախազների թեկնածուներ</a>
                        <a class="about__link text-18" href="{{ route('judgesCandidates') }}">Քննիչների թեկնածուներ</a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @include("includes.footer")


    <script src="/js/main.js"></script>
</body>

</html>