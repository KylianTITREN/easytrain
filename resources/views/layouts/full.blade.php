 <!DOCTYPE html>
<html>
<head>
    <title>Easytrain - {{ $title }}</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="fonts" href="{{ asset('font/cocogoose.otf') }}">
    <link rel="stylesheet" href="{{ asset('css/icone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <script src="https://use.fontawesome.com/9f877d3bd4.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('icones/apple-touch-icon.png') }}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icones/apple-touch-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icones/apple-touch-icon-114x114.png') }}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icones/apple-touch-icon-144x144.png') }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icones/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icones/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icones/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icones/apple-touch-icon-180x180.png') }}">
    <link rel="icon" href="{{ asset('icones/favicon.ico') }}" />
    <link rel="apple-touch-startup-image" href="/public/img/bg.png">

    <!-- CSS swiper JS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

    <!-- META -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="easytrain">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

</head>

<body id="pjax-container">


@yield("content")

<div class="text-big">
    <strong>easytrain</strong>
    <p style="margin-top: 30px">Veuillez réduire la taille écran ou utiliser votre </p> <p style="margin-top: 0">mobile pour en profiter pleinement.</p>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.pjax.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
