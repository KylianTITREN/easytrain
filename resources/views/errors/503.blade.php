@extends('layouts.head')

<?php

        $title = 'site en maintenance'

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
            <h3>503</h3>
            <h3 style="font-size: 20px;">app en maintenance</h3>
        </div>

    </div>

    </body>

@endsection

