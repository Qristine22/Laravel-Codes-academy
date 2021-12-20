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
    <link rel="stylesheet" href="/css/full-time-education.css">
    <link rel="stylesheet" href="/css/response/all-response.css">
    <link rel="stylesheet" href="/css/response/full-time-education-response.css">
</head>

<body>
    @include("includes.header")
    @include("includes.full-time-education.header-bot")


    <main>
        <section class="section education section-top">
            <div class="wrapper">
                <div class="education__cont">
                    <div class="dates__item dates__item-first flex">
                        <h2 class="dates__item_title">Դատական համակարգի ունկնդիրների ուսուցում</h2>
                        <div class="dates flex">
                            <a class="date" href="{{ route('trainingPrograms') }}">2021</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2020</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2019</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2018</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2017</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2015-2016</a>
                        </div>
                    </div>
                    <div class="dates__item flex">
                        <h2 class="dates__item_title">Դատախազության համակարգի ունկնդիրների ուսուցում</h2>
                        <div class="dates flex">
                            <a class="date" href="{{ route('trainingPrograms') }}">2021</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2020</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2019</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2018</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2017</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2015-2016</a>
                        </div>
                    </div>
                    <div class="dates__item flex">
                        <h2 class="dates__item_title">Քննչական համակարգի ունկնդիրների ուսուցում</h2>
                        <div class="dates flex">
                            <a class="date" href="{{ route('trainingPrograms') }}">2021</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2020</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2019</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2018</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2017</a>
                            <a class="date" href="{{ route('trainingPrograms') }}">2015-2016</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include("includes.footer")



    <script src="/js/main.js"></script>
</body>

</html>