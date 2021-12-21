<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="/media/img/logo/brownLogo.png">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/distance-learning.css">
    <link rel="stylesheet" href="/css/response/all-response.css">
    <link rel="stylesheet" href="/css/response/distance-learning-response.css">
</head>

<body>
    @include("includes.header")
    @include("includes.distance-learning.header-bot")

    <main>
        <section class="learning-guide section-text section-top">
            <h2 class="text-26 learning-guide__title">Հեռաուսուցման ուղեցույց</h2>
            <div class="wrapper">
                <div class="learning-guide__cont flex">
                    <div class="learning-guide__img">
                        <a href="#">
                            <img class="img" src="/media/img/distance-learning/distance-learning-courses/guide/1.png" alt="1">
                        </a>
                    </div>
                    <div class="pdf__download_cont">
                        <a class="pdf__download flex" href="#">
                            <img class="pdf__download_img" src="\media\img\icons\pdf.png" alt="pdf">
                            <span class="pdf__download_layer text-18">Ներբեռնել</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include("includes.footer")


    <script src="/js/main.js"></script>
</body>

</html>
