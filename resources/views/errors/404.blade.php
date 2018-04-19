@extends('layouts.head')

<?php

        $title = 'Page introuvable'

?>

@section('content')

    <style>
        .homeForm
        {
            background-image: radial-gradient(circle at 0 0, #00b09b, #7fed72);
            background-repeat: no-repeat;
            background-size: 100% 100vh;
        }

        body{
            background-image: radial-gradient(circle at 0 0, #00b09b, #7fed72);
            background-repeat: no-repeat;
            background-size: 100% 100vh;
        }

        .titre-easytrain{
            text-align: center;
        }

        .titre-easytrain h3{
            font-size: 70px;
        }

    </style>

    @include('_script')

    <body class="homeForm">

    <div class="container">


        <div class="titre-easytrain">
            <h3>404</h3>
            <h3 style="font-size: 30px;">error</h3>
        </div>

        <div class="btn-groupe-2">
        <a href="/accueil" data-pjax><button type="button" name="button" class="btn-register btn-inscription">Retourner à l'accueil</button></a>
        </div>

    </div>

    </body>

@endsection

