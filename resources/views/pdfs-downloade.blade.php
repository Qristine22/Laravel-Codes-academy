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
    @if (Request::is('library/*'))
        @include("includes.library.header-bot")
    @else
        @include("includes.full-time-education.header-bot")
    @endif

    <main>
        <section class="pdf-downloade section-text section-top">
            <div class="wrapper">
                <div class="conducting-exams__cont">
                    <div class="link__pdfs">
                        <a class="link__pdf flex" href="#">
                            <span class="text-18">Հայալեզու գրքերի ցանկ</span>
                            <div class="link__pdf_icon">
                                <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="link__pdf_span text-18">Ներբեռնել</span>
                            </div>
                        </a>
                        <a class="link__pdf flex" href="#">
                            <span class="text-18">Օտարալեզու գրքերի ցանկ</span>
                            <div class="link__pdf_icon">
                                <img class="link__pdf_img img" src="/media/img/icons/pdf.png" alt="pdf">
                                <span class="link__pdf_span text-18">Ներբեռնել</span>
                            </div>
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
