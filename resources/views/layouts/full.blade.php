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
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <script src="https://use.fontawesome.com/9f877d3bd4.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <!-- CSS swiper JS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

</head>

<body id="pjax-container">


@yield("content")

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.pjax.js') }}"></script>

<!-- JS swiper JS -->
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
