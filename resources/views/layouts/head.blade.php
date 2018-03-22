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
    <link rel="stylesheet" href="{{ asset('css/programme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <script src="https://use.fontawesome.com/9f877d3bd4.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
</head>

<body>

@yield("content")

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.pjax.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
