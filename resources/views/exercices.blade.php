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
        <form id="search">
                <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
                <input type="submit" style="display: none">
        </form>
        </header>

        <div class="programme">

                <div class="programme-bloc">

                        <h3><a href="/program" style="text-decoration: underline" data-pjax> < retour au muscles</a></h3> <div></div>

                        @include('_exercices', ['muscle'=>$muscle->exercices])

                </div>

        </div>



        @include('layouts.footer')

@endsection