@extends('layouts.head')

<?php

$title = 'Publication';
$icons = 'times';

?>

@section('content')

    <style>
        i
        {
            position: absolute;
            left: 23px;
            top: 19px;
            font-size: 28px!important;
            color: white;
        }

        body
        {
            overflow: hidden;
        }

        .submit
        {
            background: linear-gradient(#64bb5a, #7dda74);
            width: 100px;
            margin: auto;
            display: block;
            font-size: 16px;
            text-align: center;
            position: absolute;
            right: 23px;
            top: 19px;
            border: none;
            color: white;
            font-family: 'Roboto condensed';
            text-transform: uppercase;
            padding: 8px 0;
            border-radius: 6px;
            cursor: pointer;
        }

        .publication-form{
            height: 100vh;
            width: 100%;
            margin-bottom: 0;
            background: linear-gradient(to top,#7FED72, #7dda74);
            padding-top: 80px;
        }

        .formulaire-inscription div{
            width: 290px;
            margin: auto;
        }

        .formulaire-inscription div h3{
            margin-bottom: 15px;
            margin-left: 5px;
            color: white;
        }

        .formulaire-inscription div input{
            background-color: white;
            width: 270px;
            color: grey;
        }

        .formulaire-inscription div input::placeholder, .formulaire-inscription div textarea::placeholder{
            color: grey;
            font-weight: 100;
        }

        .formulaire-inscription div input:focus{
            outline: none;
        }

        .next-btn, .next-btn2, .next-btn3, .next-btn4, .next-btn5, .next-btn6, .prev-btn, .prev-btn2, .prev-btn3, .prev-btn4, .prev-btn5, .prev-btn6{
            font-weight: bold;
            cursor: pointer;
            border: 2px solid white;
            border-radius: 10px;
            color: white;
            font-weight: 300;
            padding: 10px 30px;
            font-size: 19px;
            background-color: transparent;
        }

        .prev-btn, .prev-btn2, .prev-btn3, .prev-btn4, .prev-btn5, .prev-btn6{
            margin-right: 20px;
        }

        .btn-part{
            width: 100%;
            margin-top: 50px;
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

        .publication-form textarea
        {
            font-family: 'Roboto';
            font-weight: 100;
            color: #454545;
            font-size: 18px;
        }

        .publication-form input
        {
            font-family: 'Roboto';
            font-weight: 100;
            color: #454545;
            font-size: 18px;
        }

        .next-btn
        {
            border: 2px solid white;
            border-radius: 10px;
            color: white;
            font-weight: 300;
            padding: 10px 30px;
            font-size: 19px;
            background-color: transparent;
        }

    </style>

        <a href="/nouvelle" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: white"></i></a>

    <section class="publication-form">

        <form class="form-horizontal" data-pjax method="POST" action="/programmeur">
            {{ csrf_field() }}

            <div class="formulaire-inscription">

                <div class="prog1">
                    <h3>Nom du programme</h3>
                    <input id="name" type="text" class="form-control" name="nom" value="{{ old('name') }}" placeholder="Ex : Mon programme de la semaine" required autofocus>
                </div>

                <div class="prog1">
                    <h3>Description</h3>
                    <textarea name="desc" id="description" style="resize: inherit; width: 270px; height: 100px; border-radius: 15px; border: none; padding: 10px; color: grey;" placeholder="Ex : Séance bras, pecs difficile ..."></textarea>
                </div>

                <div class="prog2">
                    <h3>Niveau</h3>
                    <div class="custom-select2">
                        <select name="niveau">
                            <option selected disabled>&nbsp; &nbsp; Niveau :</option>
                            @foreach(\App\Niveau::all()  as $o)

                                <option value="{!! $o->id !!}">&nbsp; &nbsp; {!! $o->nom !!}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="prog2">
                    <h3 style="margin-top: 10px;">Objectif du programme</h3>
                    <div class="custom-select2">
                        <select name="objectif">
                            <option  selected disabled>&nbsp; &nbsp; Objectif :</option>
                            @foreach(\App\Objectif::all()  as $o)

                                <option value="{!! $o->id !!}">&nbsp; &nbsp; {!! $o->nom !!}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="prog3">
                    <h3>Durée</h3>
                    <div class="custom-select2">
                        <select name="time">
                            <option value="0" selected disabled>&nbsp; &nbsp; Durée :</option>
                            @for($i = 1; $i<=8; $i++)

                                <option value="{!! $i !!}">&nbsp; &nbsp; {!! $i !!}@if($i>1) semaines @else semaine @endif</option>

                            @endfor
                        </select>
                    </div>
                </div>

            </div>

            <div class="btn-part">
                <span class="prev-btn"> Précédent </span>
                <span class="prev-btn2"> Précédent </span>

                <span class="next-btn"> Suivant </span>
                <span class="next-btn2"> Suivant </span>
                <input type="submit" name="submit" class="next-btn3" value="Créer" style="border: none; border-radius: 25px">
            </div>

        </form>

    </section>

    <script>

            $('.prog2, .prog3, .prog4, .prog5, .next-btn2, .next-btn3, .next-btn4, .prev-btn, .prev-btn2, .prev-btn3').hide();

            $('.next-btn').click(function(){
                $(".prog1").toggle("slide, left, 300");
                $('.prog2').toggle('slide, right, 600');
                $('.next-btn').hide();
                $('.next-btn2').show();
                $('.prev-btn').show();
            });

            $('.prev-btn').click(function(){
                $(".prog1").toggle("slide, left, 300");
                $('.prog2').toggle('slide, right, 600');
                $('.next-btn').show();
                $('.next-btn2').hide();
                $('.prev-btn').hide();
            });

            $('.next-btn2').click(function(){
                $(".prog2").toggle("slide, left, 300");
                $('.prog3').toggle('slide, right, 600');
                $('.next-btn2').hide();
                $('.next-btn3').show();
                $('.prev-btn2').show();
                $('.prev-btn').hide();
            });

            $('.prev-btn2').click(function(){
                $(".prog2").toggle("slide, left, 300");
                $('.prog3').toggle('slide, right, 600');
                $('.next-btn2').show();
                $('.next-btn3').hide();
                $('.prev-btn2').hide();
                $('.prev-btn').show();
            });

            $('.next-btn3').click(function(){
                $(".prog3").toggle("slide, left, 300");
                $('.prog4').toggle('slide, right, 600');
                $('.next-btn3').hide();
                $('.next-btn4').show();
                $('.prev-btn3').show();
                $('.prev-btn2').hide();
            });

            $('.prev-btn3').click(function(){
                $(".prog3").toggle("slide, left, 300");
                $('.prog4').toggle('slide, right, 600');
                $('.next-btn3').show();
                $('.next-btn4').hide();
                $('.prev-btn3').hide();
                $('.prev-btn2').show();
            });

            function chooseFile() {
                $("#fileInput").click();

                function readURL(input) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#blah').css('background-image', 'url(' + e.target.result + ')');
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#fileInput").change(function() {
                    readURL(this);
                });
            }
    </script>

@endsection

