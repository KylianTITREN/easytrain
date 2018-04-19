@extends('layouts.head')

<?php

$title = 'Éditer mon profil';
$icons = '';
$page = '';

?>

@section('content')

    <style>

        header a
        {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            height: 100%;
            margin-left: 20px;
            font-size: 15px!important;
            color: #7FED72;
        }

        .field{
            display: flex;
            width: 100%;
            justify-content:space-between;
            padding: 20px 0;
            border-bottom: 1px solid grey;
        }

        .field h3{
            margin-left: 20px;
            font-weight: 400;
        }

        .field input{
            border: none;
            background-color: inherit;
            color: #75db69;
            margin-right: 40px;
        }

        .field input:focus{
            outline: none;
        }

        .custom-select2 select{
            background-color: inherit;
            color: grey;
            border: 0;
            -webkit-appearance: none;
            width: 210Px;
        }

        .custom-select2 select:focus{
            outline: none;
        }

        .submit{
            position: absolute;
            right: 20px;
            top: 19px;
            border: none;
            background-color: inherit;
            font-size: 15px!important;
            color: #7FED72;
            cursor: pointer;
            font-weight: bold;
            z-index: 99;
            padding-top: 4px;
        }

        .homeForm{
            background-image: none;
        }
    </style>

    <header>
        <a style="width: 100px;" href="/profile/{{$utilisateur->id}}" data-pjax>Annuler</a>
    </header>

    <header id="blah" onclick="chooseBan();" style='cursor: pointer;display:flex; align-items: center; justify-content: space-around;height: 150px;  background-image: url("/uploads/banniere/{{ $utilisateur->banniere }}"); background-size: cover; background-repeat: no-repeat;'>
        <span style="display: flex; opacity: 0.5; width: 100%; background-color: black; align-items: center; justify-content: center; font-weight: bold; font-size: 40px; color: white; height: 100%;">+</span>
    </header>


    <section style="margin: 0">
        <div class="profil-header">
            <div class="profil-header_grid1">
                <div onclick="choosePp();"id="blah2"  style='cursor: pointer;z-index:99;width: 80px; height: 80px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'>
                    <span style="display: flex; opacity: 0.5;border-radius: 16px; background-color: black; align-items: center; justify-content: center; font-weight: bold; font-size: 40px; color: white; height: 100%;">+</span>
                </div>
            </div>
        </div>

        <form enctype="multipart/form-data" action="edit"  method="POST" style="margin-top: 20px">
            {{csrf_field()}}

            <input type="file" accept="image/*" name="avatar" id="fileInput2" style="display: none">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" style="display: none">
            <input type="file" accept="image/*" name="banniere" id="fileInput" style="display: none">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" style="display: none">

            <div class="field">
                <h3>Nom</h3><input type="text" id='name' name="name" style="color: grey;" placeholder="{{$utilisateur->name}}" value="{{$utilisateur->name}}">
            </div>

            <div class="field">
                <h3>Bio</h3><input type="text" id='biographie' style="color: grey" name="biographie" placeholder="Ajouter une bio" value="{{$utilisateur->biographie}}">
            </div>

            <div class="field">
                <h3>Objectif</h3><div class="custom-select2">
                    <select name="objectif_id">
                        <option value="0" selected disabled>{{$utilisateur->objectif->nom}}</option>
                        @foreach(\App\Objectif::all()  as $o)

                            <option value="{!! $o->id !!}">{!! $o->nom !!}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="field">
                <h3>Niveau</h3>
                <div class="custom-select2">
                    <select name="niveau_id">
                        <option value="0" selected disabled>{{$utilisateur->niveau->nom}}</option>
                        @foreach(\App\Niveau::all()  as $n)

                            <option value="{!! $n->id !!}">{!! $n->nom !!}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <input type="submit" class="submit" value="Enregistrer">
        </form>

        <a style="margin-top: 30px; display: flex; width: 100%; justify-content: center; color: red; font-weight: bold; font-family: Cocogoose; " href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-pjax>déconnexion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </section>

    <div class="edit-end">
        <p>easytrain v0.0.1 MKZ</p>
        <small>Copyright 2018</small>
    </div>

    <script>

        function chooseBan() {
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

        function choosePp() {
            $("#fileInput2").click();

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah2').css('background-image', 'url(' + e.target.result + ')');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#fileInput2").change(function() {
                readURL(this);
            });
        }
    </script>

@endsection
