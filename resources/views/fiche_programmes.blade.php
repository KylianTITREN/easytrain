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

    .custom-select2 select{
        background-color: white;
        color: rgba(92, 92, 92, 0.4);
        border: 0;
        -webkit-appearance: none;
        width: 290px;
        height: 40px;
    }

    .custom-select2 select:focus{
        outline: none;
    }

    .select-muscle{
        background: linear-gradient(#ffffff, #FFFFFF);
        margin: 2px 0;
        font-size: 14px;
        border: none;
        color: #65c959;
        padding: 15px;
        border-radius: 6px;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
        cursor: pointer;
        display: block;
    }

    .programme-bloc{
        display: grid;
        grid-template-columns: 0.5fr 0.5fr;
        grid-gap: 10px;
        padding: 20px;
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

        @if($programmes->isLikedBy(Auth::user()->id))

            <a href="/unliker2/{{ $programmes->id }}" data-pjax-toggle id="unlike"><i style="color:#7FED72; font-size: 18px;" class="fa fa-heart"></i></a>

        @else

            <a href="/liker2/{{ $programmes->id }}" data-pjax-toggle id="like"><i style="color:#e0dee2; font-size: 18px;" class="fa fa-heart"></i></a>

        @endif

        <p>{{ $programmes->likesCount }}</p>
        <p>{!! $programmes->description !!}<br><b style="font-size: 12px;">Spécial @if($programmes->objectif == 1) Prise de masse @else @endif @if($programmes->objectif == 2) Sèche @else  @endif @if($programmes->objectif == 3) Perte de poids @else  @endif @if($programmes->objectif == 4) Entretien @else  @endif @if($programmes->objectif == 10) Non défini @else  @endif</b></p>


            <div style="margin: 25px 0;">

        @if($programmes->utilisateur_id == 0)


        @elseif($programmes->utilisateur->id != Auth::id())

            @else

                    <form action="/add_exo" data-pjax method="POST">
                        {{csrf_field()}}

                        <div class="custom-select2">

                            <input type="text" name="programmes" value="{{$programmes->id}}" style="display: none;">

                        <select name="exercices">

                                <option value="0" selected disabled>&nbsp; &nbsp; Ajouter un exercice :</option>

                            @foreach(\App\Exercices::all()  as $o)

                                <option value="{!! $o->id !!}">&nbsp; &nbsp; {!! $o->nom !!}</option>

                            @endforeach

                        </select>

                        </div>

                        <input type="submit" value="Ajouter">

                    </form>

        @endif

            <div class="programme-bloc">

                @foreach($programmes->exoProg as $e)
                    <a data-pjax class="select-muscle" href="/exercices/{{$e->id}}">{{$e->nom}}
                        @if($programmes->utilisateur_id == 0)

                        @elseif($programmes->utilisateur->id != Auth::id())

                        @else
                            <a href="{{ url('/deleteexo/'.$e->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; "><img
                                        src="{{ asset('icones/icones/delete.png') }}" alt=""></a>
                        @endif
                    </a>
                @endforeach

            </div>

        @if($programmes->utilisateur_id == 0)


        @elseif($programmes->utilisateur->id != Auth::id())

        @else
            <a href="{{ url('/deleteprog/'.$programmes->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; ">Supprimer</a>
        @endif


    </div>


</div>

    @endsection