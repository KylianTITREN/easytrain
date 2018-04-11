@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

    <style>

        .select-muscle{
            background-color: #2EB11F;
            margin: 10px 0;
            font-size: 14px;
            border: none;
            color: white;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
            cursor: pointer;
            display: block;
        }

        @font-face {
            font-family: "Cocogoose";
            src: url('cocogoose.otf');
        }

        h5
        {
            margin: 0;
        }

        .programme {
            margin-bottom: 70px;
            margin: 20px 20px;
        }

        .programme h3
        {
            font-family: 'Cocogoose';
            font-size: 17px;
            padding: 10px 0 15px 0;
            color: #414141;
            text-align: left;
        }

    </style>

<header>
    <form id="search">
        <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
        <input type="submit" style="display: none">
    </form>
</header>

<section class="programme">

    <div class="programme-bloc">

        <h3>choisir son exercice</h3>
                @foreach($muscles as $m)
                    <a data-pjax class="select-muscle" href="/muscles/{{$m->id}}">{{$m->nom}}</a>
                @endforeach

    </div>

    <div class="programme-bloc">

        <h3>programme personnalisé</h3>

    </div>

    <br>

</section>

@include('layouts.footer')

@endsection