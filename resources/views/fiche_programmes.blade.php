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
        font-weight: 200;
    }

    .exo_card{
        display: flex;
        min-height: 100vh;
        background-color: #65c959;
        width: 100vw;
        flex-direction: column;
        margin: 0;
        align-items: flex-start;
        justify-content: flex-start;
        padding-bottom: 50px;
    }

    .add_exo{
        background-color: white;
        color: #65c959;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 15px;
        font-weight: bold;
        margin-right: 4px;;
    }
</style>

<div class="exo_card">

        <span class="goBack">
        <a href="/program" data-pjax><img src="{{ asset('icones/icones/close.png') }}" alt=""></a>
        </span>

    <div class="exo_info">

        <h style="text-align: center; margin: auto; display: block; color: white; font-family: roboto condensed; font-size: 23px; text-transform: uppercase; font-weight: 400;">{!! $programmes->nom !!}</h>

        <p>{!! $programmes->description !!}<br><b style="font-size: 12px;">Spécial @if($programmes->objectif == 1) Prise de masse @else @endif @if($programmes->objectif == 2) Sèche @else  @endif @if($programmes->objectif == 3) Perte de poids @else  @endif @if($programmes->objectif == 4) Entretien @else  @endif @if($programmes->objectif == 10) Non défini @else  @endif</b></p>

        @for($i=1; $i <= $programmes->durée; $i++)

            <div style="margin: 25px 0;">

                <h3 style="color: white; font-weight: 400; padding-left: 35px;">Semaine {{$i}}</h3>

                <a href="" style="margin-left: 60px; padding: 5px 0; color: white; display: flex; align-items: center; font-size: 14px"><span class="add_exo">+</span> Ajouter des exercices</a>

            </div>

        @endfor

        @if($programmes->utilisateur->id != Auth::id())

        @else
            <a href="{{ url('/deleteprog/'.$programmes->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; ">Supprimer</a>
        @endif


    </div>


</div>

    @endsection