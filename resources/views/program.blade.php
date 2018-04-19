@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

    <style>

        .select-muscle{
            background: linear-gradient(#64bb5a, #7dda74);
            margin: 2px 0;
            font-size: 14px;
            border: none;
            color: white;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
            cursor: pointer;
            display: block;
        }

        .programme-bloc{
            display: grid;
            grid-template-columns: 0.5fr 0.5fr;
            grid-gap: 5px;
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
            padding-bottom: 21px;
        }

        .programme h3
        {
            font-family: 'Cocogoose';
            font-size: 17px;
            padding: 13px 0 13px 0;
            color: #414141;
            text-align: left;
        }

        .mes-prog{
            background: linear-gradient(#ffffff, #FFFFFF);
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

    </style>

<header>
    <form id="search">
        <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
        <input type="submit" style="display: none">
    </form>
</header>

<section class="programme">

    <a class="mes-prog" href="/prog/{{Auth::user()->id}}" data-pjax>
        <h3 style="color: #7dda74">mes programmes</h3>
    </a>

    <h3>choisir son exercice</h3>

    <div class="programme-bloc">

                @foreach($muscles as $m)
                    <a data-pjax class="select-muscle" href="/muscles/{{$m->id}}">{{$m->nom}}</a>
                @endforeach

    </div>

    <div>

        <h3 style="margin-top: 20px">programmes adaptés</h3>

            @include('_prog', ['programmes'=>$programmes])


    </div>

    <br>

</section>

@include('layouts.footer')

@endsection