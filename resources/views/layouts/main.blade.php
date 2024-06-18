<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="H7SaO3_BiAvGlQqrZmvg3T-bzgQn8g7wNfnaLFVP5WA" />
    <title>Արդարադատության Ակադեմիա - ԱՐԴԱՐԱԴԱՏՈւԹՅԱՆ ԱԿԱԴԵՄԻԱ</title>
    <link rel="icon" type="image/x-icon" href="/media/img/logo/brownLogo.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link href="/button-visually-impaired-jquery/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/button-visually-impaired-jquery/css/bvi.min.css" type="text/css">
    <link rel="stylesheet" href="/css/all.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @yield('styles')
    <link rel="stylesheet" href="/css/response/all-response.css">
</head>

<body>
    <a style="margin-top: 150px; display: block" href="#" class="bvi-panel-open">Версия для слабовидящих</a>
    <aside aria-label="main-aside">
        <div class="preloader flex">
            <div class="preloader__img">
                <div class="preloader__cont"></div>
                <img class="img" src="/media/img/logo/brownLogo.png" alt="loading">
            </div>
        </div>
    </aside>

    @include('includes.header')
    @yield('header-bot')

    @yield('content')

    @include("includes.footer")

<script src="/button-visually-impaired-jquery/js/bootstrap.min.js"></script>
<script src="/button-visually-impaired-jquery/js/jquery.min.js"></script>
<script type='text/javascript' src='/button-visually-impaired-jquery/js/responsivevoice.min.js?ver=1.5.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var bvi = {"BviPanel":"1","BviPanelBg":"white","BviPanelFontSize":"18","BviPanelLetterSpacing":"normal","BviPanelLineHeight":"normal","BviPanelImg":"1","BviPanelImgXY":"1","BviPanelReload":"0","BviPanelNoWork":"0","BviPanelText":"\u0412\u0435\u0440\u0441\u0438\u044f \u0434\u043b\u044f \u0441\u043b\u0430\u0431\u043e\u0432\u0438\u0434\u044f\u0449\u0438\u0445","BviPanelCloseText":"\u041e\u0431\u044b\u0447\u043d\u0430\u044f \u0432\u0435\u0440\u0441\u0438\u044f \u0441\u0430\u0439\u0442\u0430","BviFixPanel":"1","ver":"Button visually impaired version 1.0.3","BviCloseClassAndId":"","BviTextBg":"#e53935","BviTextColor":"#ffffff","BviSizeText":"14","BviSizeIcon":"30","BviPlay":"1"};
    /* ]]> */
</script>
<script src="/button-visually-impaired-jquery/js/bvi-panel.js"></script>
<script src="/button-visually-impaired-jquery/js/bvi.min.js"></script>
<script src="/button-visually-impaired-jquery/js/js.cookie.js"></script>
<script src="/js/loader.js"></script>
<script src="/js/main.js"></script>

    @yield('scripts')
</body>

</html>
