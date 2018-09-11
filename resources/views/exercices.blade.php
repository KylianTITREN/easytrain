@extends('layouts.head')

<?php

$title = 'Exercices';
$icons = 'times';

?>

<style>
        .select-muscle{
                background: linear-gradient(#64bb5a, #7dda74);
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

        .programme-bloc{
                display: grid;
                grid-template-columns: 0.5fr 0.5fr;
                grid-gap: 10px;
        }
</style>

@section('content')

        <header>
                <h3>{{$muscle->nom}}</h3>
        </header>

        <div class="programme">

                <h3><a href="/program" data-pjax> < retour au muscles</a></h3> <div></div>

                <div class="programme-bloc">

                        @include('_exercices', ['muscle'=>$muscle->exercices])

                </div>

        </div>



        @include('layouts.footer')

@endsection