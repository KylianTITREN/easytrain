@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'times';

?>

@section('content')

<style>
    .goBack{
        background-color: #65c959;
        border-radius: 50%;
        top:20px;
        right: 20px!important;
        left: inherit!important;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .goBack i
    {
        font-size: 38px!important;
        color: white;
    }

    .exo_couv{
        background-size: cover;
        background-position: center;
        width: 100%;
    }

    .exo_info{
        height: 100%;
        width: 100%;
        background-color: #65c959;
        text-align: left;
        padding-top: 30px;
    }

    .exo_info strong{
        padding-left: 30px;
        color: white;
        font-weight: 400;
        font-size: 22px;
    }

    .exo_info p{
        color: white;
        margin: 30px;
        font-weight: 300;
    }

    .exo_card{
        display: flex;
        height: 100vh;
        width: 100vw;
        flex-direction: column;
        margin: 0;
        align-items: flex-start;
        justify-content: flex-start;
    }
</style>

<div class="exo_card">

        <span class="goBack">
        <a href="/program" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true"></i></a>
        </span>



    <div class='exo_couv' style="background-image: url('/uploads/program_photo/{{$programmes->cover}}'); height: 400px;"></div>

    <div class="exo_info">

        <strong>{!! $programmes->nom !!}</strong>

        <p>{!! $programmes->description !!}</p>

        @for($i=1; $i <= $programmes->durée; $i++)

            <p>Semaine {{$i}}</p>

            <a href="">+ Ajouter des exercices</a>

        @endfor

        @if($programmes->utilisateur->id != Auth::id())

        @else
            <a href="{{ url('/deleteprog/'.$programmes->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; ">Supprimer</a>
        @endif

    </div>


</div>

    @endsection