@extends('layouts.head')

<?php

$title = 'Exercices';
$icons = 'times';

?>

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

@section('content')

        <header>
        <form id="search">
                <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
                <input type="submit" style="display: none">
        </form>
        </header>

        <div class="programme">

                <h3><a href="/program" style="text-decoration: underline" data-pjax> < retour au muscles</a></h3>
                @foreach($muscle->exercices as $m)
                        <a class="select-muscle" href="/exercices/{{$m->id}}" data-pjax>{{$m->nom}}</a>
                @endforeach

        </div>



        @include('layouts.footer')

@endsection