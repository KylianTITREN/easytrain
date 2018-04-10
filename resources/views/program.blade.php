@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

    <style>

        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #F8F8F8;/
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            box-shadow: 0px 1px 6px #C7C7C7;
            border-radius: 50px;
            height: 70px;
            width: 70px!important;
            margin: 0 4px;
        }

        .swiper-wrapper
        {
            margin-top: 10px;
            margin-bottom: 20px
        }
    </style>

<header>
    <form id="search" data-pjax>
        <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
        <input type="submit" style="display: none">
    </form>
    <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
</header>

<section class="programme">

    <div class="programme-bloc">

        <h3>choisir son exercice</h3>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($muscles as $m)
                <div class="swiper-slide"><a href="/muscles/{{$m->id}}"><img src="img/bras.png" alt="bras"></a></div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="programme-bloc">

        <h3>programme personnalisé</h3>

    </div>

    <br>

    @yield('recherche')

</section>

@include('layouts.footer')

@endsection