@extends('layouts.head')

<?php

$title = 'Exercices';
$icons = 'comments';

?>

<style>
        html, body {
                position: relative;
                height: 100%;
        }
        body {
                background: #eee;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color:#000;
                margin: 0;
                padding: 0;
        }
        .swiper-container {
                width: 100%;
                height: 100%;
        }
        .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                /* Center slide text vertically */
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
        }
</style>

<span class="goBack">
        <a href="{{ URL::previous() }}"><i class="fa fa-angle-left" style="color:#7FED72;"></i></a>
</span>

@section('content')

        <header>
                <h3>{{ $title }}</h3>
                <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
        </header>

        <div class="swiper-exercice">
                <div class="swiper-wrapper">
                        @foreach ($muscle->exercices as $e)

                                <div class="swiper-slide">
                                        <li><a href="#">{{$e->nom}}</a></li><br>
                                </div>

                        @endforeach
                </div>
        </div>


        @include('layouts.footer')

@endsection