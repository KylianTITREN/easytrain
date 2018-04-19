@extends('layouts.head')

<?php

$title = 'Publication';
$icons = 'times';

?>

@section('content')

    <style>
        header i
        {
            position: absolute;
            left: 23px;
            top: 19px;
            font-size: 28px!important;
            color: #7dda74;
        }

        .publication-form{
            margin: 0;
            display: flex;
            width: 100%;
            align-items: flex-start;
        }

        .publication-form form{
            width: 100%;
        }

        .publication-form textarea{
            width: 100%;
            border: none;
            height: 170px;
            padding: 30px 0 30px 0;
            resize: inherit;
        }

        .publication-form textarea:focus{
            outline: none;
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
            border-radius: 15px;
            padding: 8px 0;
            cursor: pointer;
        }

        .add_prog{
            border-radius: 15px;
            cursor: pointer;
            border: 2px solid #64bb5a;
            font-weight: 400;
            color: #64bb5a;
            font-size: 13px;
            text-align: center;
            padding: 9px;
            margin-right: 20px;
        }

        .publication-form textarea
        {
            font-family: 'Roboto';
            font-weight: 100;
            color: #454545;
            font-size: 25px;
        }

        body
        {
            overflow: hidden;
        }

    </style>

    <header>
        <a href="/accueil" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: #2EB11F"></i></a>
    </header>

        <section class="publication-form" style="height: 100vh; background-color: white;">

            <div class="publication-info_avatar" style="margin-top: 20px; margin-left: 20px; margin-right: 20px;">
                <div style='width: 44px; height: 44px; border-radius: 16px; background-image: url("/uploads/avatars/{{ Auth::user()->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
            </div>

            <form action="/creer" data-pjax method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                
                <textarea name="nom" id="nom" value="{{old('nom')}}" style="background-color: transparent;" required autofocus placeholder="Publier votre humeur.."></textarea>

                <textarea name="nom" id="nom" required autofocus placeholder="Publier votre humeur..">{{old('nom')}}</textarea>

                @include('_errors')

                <hr style="margin-left: -200px">

                <div style="display: flex; align-items: center; height: 60px;  margin-left: -60px; margin-bottom: 100px;">

                    <a class='add_prog' href="/nouvelle2">Créer un programme</a>

                    <div onclick="chooseFile();" style="cursor: pointer; overflow: hidden; width: 40px; height: 40px;">
                        <span style="display: flex;  align-items: center; justify-content: center; font-weight: bold; font-size: 35px; color: #2EB11F; height: 100%;"><img
                                    src="{{ asset('icones/icones/photo.png') }}" alt=""></span>
                    </div>

                    <div id="blah" style="overflow: hidden; width: 41px; height: 41px; background-position: center; background-size: cover; border-radius: 15px; margin-left: 10px;"></div>

                </div>

                <input type="file" accept="image/*" id="fileInput" name="photo" style="display: none"/>
                <input class="submit" type="submit" value="Publier"/>
            </form>

            <script>
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

        </section>

@endsection

