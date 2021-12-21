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
    <link rel="stylesheet" href="/css/bulletin.css">
    <link rel="stylesheet" href="/css/response/all-response.css">
    <link rel="stylesheet" href="/css/response/bulletin-response.css">
</head>

<body>
    @include("includes.header")

    <main>
        <section class="bulletin section-text">
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book1.png" alt="book1">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book2.png" alt="book2">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book3.png" alt="book3">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book4.png" alt="book4">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                    <div class="swiper-slide courses__slide-item">
                        <div class="courses__item">
                            <a href="#">
                                <img class="img" src="/media/img/bulletin/Book5.png" alt="book5">
                            </a>
                        </div>
                        <h2 class="courses__item_name text-26">ԲԱՆԲԵՐ, 2020, № 1 (3)</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="bulletin__pdfs section-text">
            <div class="wrapper">
                <div class="link__pdfs">
                    <a class="link__pdf flex" href="#">
                        <span class="text-18">Գիտագործնական հանդեսի հրատարակման աշխատանքների կազմակերպման կարգը</span>
                        <div class="link__pdf_icon">
                            <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                            <span class="link__pdf_span text-18">Ներբեռնել</span>
                        </div>
                    </a>
                    <a class="link__pdf flex" href="#">
                        <span class="text-18">
                            Գիտագործնական հանդեսի կազմի ձևը
                        </span>
                        <div class="link__pdf_icon">
                            <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                            <span class="link__pdf_span text-18">Ներբեռնել</span>
                        </div>
                    </a>
                    <a class="link__pdf flex" href="#">
                        <span class="text-18">
                            Գիտագործնական հանդեսի էթիկայի կանոնները
                        </span>
                        <div class="link__pdf_icon">
                            <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                            <span class="link__pdf_span text-18">Ներբեռնել</span>
                        </div>
                    </a>
                    <a class="link__pdf flex" href="#">
                        <span class="text-18">
                            Գիտագործնական հանդեսի խմբագրական խորհրդի կազմը
                        </span>
                        <div class="link__pdf_icon">
                            <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                            <span class="link__pdf_span text-18">Ներբեռնել</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="section-text rector__bot">
            <div class="wrapper">
                <div class="rector__bot_cont">
                    <a class="about__link text-18" href="motivational-videos.php">Մոտիվացնող ներածական տեսանյութեր</a>
                    <a class="about__link text-18" href="media-materials.php">Լրացուցիչ մեդիա-նյութեր</a>
                    <a class="about__link text-18" href="#">Հեռաուսուցման ուղեցույց</a>
                </div>
            </div>
        </section>
    </main>

    @include("includes.footer")


    <script src="/js/swiper.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/pdf.js"></script>
</body>

</html>