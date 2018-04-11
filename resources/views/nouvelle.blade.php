@extends('layouts.head')

<?php

$title = 'publication';
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
            color: #7FED72;
        }

        .publication-form{
            margin: 0;
            display: flex;
            width: 100%;
            align-items: flex-start;
            background-color: white;
        }

        .publication-form form{
            width: 100%;
        }

        .publication-form textarea{
            width: 100%;
            border: none;
            height: 200px;
            padding: 30px 0 30px 0;
            resize: inherit;
        }

        .publication-form textarea:focus{
            outline: none;
        }

        .submit
        {
            background-color: #2EB11F;
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
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
            cursor: pointer;
        }

    </style>

    <header>
        <a href="{{URL::previous()}}"><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: #2EB11F"></i></a>
    </header>

        <section class="publication-form">

            <div class="publication-info_avatar" style="margin-top: 20px; margin-left: 20px; margin-right: 20px;">
                <div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ Auth::user()->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
            </div>

            <form action="/creer" data-pjax method="post" enctype="multipart/form-data">
                <textarea name="nom" id="nom" value="{{old('nom')}}" required autofocus placeholder="Publier votre humeur.."></textarea>

                <input type="file" id="fileInput" name="photo" style="display: none"/>
                <hr style="margin-left: -200px">
                <div style="display: flex; align-items: center; margin-top: 10px">

                    <a href="/nouvelle2"><img src="/img/training.png" alt="program" style="height: 40px; margin-right: 10px"></a>

                    <div style="display: flex; cursor: pointer;"  onclick="chooseFile();">
                        <img src="/img/photo-camera.png" alt="choose pic">
                    </div>

                </div>
                {{csrf_field()}}
                <input class="submit" type="submit" value="publier"/>
            </form>

            <script>
                function chooseFile() {
                    $("#fileInput").click();
                }
            </script>

        </section>

@endsection

