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
        min-height: 100%;
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
        font-weight: 300;
    }

    .exo_card{
        display: flex;
        min-height: 100vh;
        width: 100vw;
        background-color: #65c959;
        flex-direction: column;
        margin: 0;
        align-items: flex-start;
        justify-content: flex-start;
        padding-bottom: 50px;
    }
</style>

<div class="exo_card">

        <span class="goBack">
        <a href="/muscles/{{$exercices->idMuscles}}" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true"></i></a>
        </span>

        <div class='exo_couv' style="background-image: url('/uploads/program_photo/{{$exercices->image}}'); height: 250px;"></div>

    <div class="exo_info">

        <strong>{!! $exercices->nom !!}</strong>

        <p>{!! $exercices->description !!}</p>

    </div>


</div>

    @endsection