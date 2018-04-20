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
        background-color: transparent;
        color: rgba(92, 92, 92, 0.4);
        border: 2px solid white;
        -webkit-appearance: none;
        width: 190px;
        height: 40px;
        font-size: 16px;
        margin-right: 10px;
        color: white;
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
        font-weight: 400;
        font-size: 20px;
        margin-bottom: 30px;
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

    .icon_name{
        background-color: white;
        color: #7FED72;
        border-radius: 12px;
        padding: 7px 15px;
        font-size: 14px;
        width: auto;
        margin-left: 20px;
        margin-right: 20px;
        display: inherit;
        top: 30px;
    }

    .like
    {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        padding-right: 35px;
    }

    .like a
    {
        margin-right: 3px;
    }

    .like h
    {
        margin-right: 6px;
    }
</style>

<div class="exo_card">

        <span class="goBack">
        <a href="/program" data-pjax><img src="{{ asset('icones/icones/close.png') }}" alt=""></a>
        </span>

    <div class="exo_info">

        <h style="text-align: center; margin: auto; display: block; margin-bottom: 30px; color: white; font-family: roboto condensed; font-size: 23px; text-transform: uppercase; font-weight: 400;">{!! $programmes->nom !!}</h>

        <div class="info" style="display: flex; align-items: center">
        @if($programmes->utilisateur_id == 0)
            <a href="#"><span class="icon_name">easytrain</span></a>
        @else
            <a href="/profile/{{$programmes->utilisateur->id}}"><span class="icon_name">{!! $programmes->utilisateur->name !!}</span></a>
        @endif

        <div class="like">
            <h style="font-weight: 400; margin-right: 5px; color: white;">{{ $programmes->likesCount }}</h>

            @if($programmes->isLikedBy(Auth::user()->id))

                <a href="/unliker2/{{ $programmes->id }}" data-pjax-toggle id="unlike"><i style="color:#7FED72; font-size: 18px;" class="fa fa-heart"></i></a>

            @else

                <a href="/liker2/{{ $programmes->id }}" data-pjax-toggle id="like"><i style="color:rgba(255,255,255,0.8); font-size: 18px;" class="fa fa-heart"></i></a>

            @endif
        </div>
        </div>

        <p>{!! $programmes->description !!}<br><b style="font-size: 12px;">Spécial @if($programmes->objectif == 1) Prise de masse @else @endif @if($programmes->objectif == 2) Sèche @else  @endif @if($programmes->objectif == 3) Perte de poids @else  @endif @if($programmes->objectif == 4) Entretien @else  @endif @if($programmes->objectif == 10) Non défini @else  @endif</b></p>

        <h style="color: white; margin-left: 30px; margin-bottom: 40px">Durée : {{ $programmes->durée }} semaines</h>

            <div style="margin: 25px 0;">

        @if($programmes->utilisateur_id == 0)


        @elseif($programmes->utilisateur->id != Auth::id())

            @else

                    <form action="/add_exo" data-pjax method="POST">
                        {{csrf_field()}}

                        <div class="custom-select2" style="text-align: center; margin-top: 50px;">

                            <input type="text" name="programmes" value="{{$programmes->id}}" style="display: none;">

                        <select name="exercices">

                                <option value="0" selected disabled>&nbsp;&nbsp;Ajouter un exercice</option>

                            @foreach(\App\Exercices::all()  as $o)

                                <option value="{!! $o->id !!}">&nbsp; &nbsp; {!! $o->nom !!}</option>

                            @endforeach

                        </select>

                            <input type="submit" style="color: #7fed72; background-color: white; border: none; border-radius: 20px; width: 35px; height: 35px;" value="+">

                        </div>

                    </form>

        @endif

            <div class="programme-bloc">

                @foreach($programmes->exoProg as $e)

                    <a style="display: flex; justify-content: space-between; flex-direction: row" data-pjax class="select-muscle" href="/exercices/{{$e->id}}">{{$e->nom}}
                        @if($programmes->utilisateur_id == 0)

                        @elseif($programmes->utilisateur->id != Auth::id())

                        @else
                            <span onclick="goTo{{$e->id}}();" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; z-index: 99;"><img
                                        src="{{ asset('icones/icones/delete.png') }}" alt=""></span>
                        @endif
                    </a>

                    <script>
                        function goTo{{$e->id}}(){
                            window.location = '/deleteexo/{{$e->id}}';
                        }
                    </script>

                @endforeach

                    </div>

                    @if($programmes->utilisateur_id == 0)


                    @elseif($programmes->utilisateur->id != Auth::id())

                    @else
                        <a href="{{ url('/deleteprog/'.$programmes->id) }}" data-pjax-toggle style="font-size: 14px; color: white; text-align: center; display: block;">Supprimer</a>
                    @endif





    </div>


</div>

    @endsection