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
        font-weight: 300;
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
        padding: 1px 10px;
        font-size: 30px;
        font-weight: bold;
        margin-right: 10px;
    }
</style>

<div class="exo_card">

        <span class="goBack">
        <a href="/program" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true"></i></a>
        </span>



    <div class='exo_couv' style="background-image: url('/uploads/program_photo/{{$programmes->cover}}'); height: 200px;"></div>

    <div class="exo_info">

        <strong>{!! $programmes->nom !!}</strong>

        @if($programmes->isLikedBy(Auth::user()->id))

            <a href="/unliker2/{{ $programmes->id }}" data-pjax-toggle id="unlike"><i style="color:#7FED72; font-size: 18px;" class="fa fa-heart"></i></a>

        @else

            <a href="/liker2/{{ $programmes->id }}" data-pjax-toggle id="like"><i style="color:#e0dee2; font-size: 18px;" class="fa fa-heart"></i></a>

        @endif

        <p>{{ $programmes->likesCount }}</p>

        <p>{!! $programmes->description !!}<br><b>Spécial @if($programmes->objectif == 1) Prise de masse @else @endif @if($programmes->objectif == 2) Sèche @else  @endif @if($programmes->objectif == 3) Perte de poids @else  @endif @if($programmes->objectif == 4) Entretien @else  @endif @if($programmes->objectif == 10) Non défini @else  @endif</b></p>

        @if($programmes->utilisateur_id == 0)


        @elseif($programmes->utilisateur->id != Auth::id())

            @else

            <a href="" style="margin-left:20px;color: white; display: flex; align-items: center"><span class="add_exo" onclick="addExo();">+</span> Ajouter des exercices</a>

        @endif

        <form action="/add_exercices" data-pjax method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <select name="add_exo" id="fileSelect" style="display: none">
                @foreach(\App\Exercices::all()  as $e)

                    <option value="{!! $e->id !!}">{!! $e->nom !!}</option>

                @endforeach
            </select>

        </form>

        @foreach($programmes->contient as $e)

            {{ $e->exercice_id }}

        @endforeach

        @if($programmes->utilisateur_id == 0)


        @elseif($programmes->utilisateur->id != Auth::id())

        @else
            <a href="{{ url('/deleteprog/'.$programmes->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; ">Supprimer</a>
        @endif


    </div>

    <script>
        function addExo() {
            $("#fileSelect").click();
        }
    </script>


</div>

    @endsection