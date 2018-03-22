@extends('layouts.head')
@extends('layouts.header')

<?php

$title = 'Éditer mon profil';
$icons = '';
$page = '';

?>
<span class="goBack">
        <a href="{{ url('/profile') }}"><i class="fa fa-angle-left" style="color:#7FED72;"></i></a>
    </span>

@section('content')

    <p class="edit-label">Mon compte</p>
    <div class="list-section">
        <strong>Nom <br><br>

            <form action="" method="POST">
            <input type="text" name="name" id='name'>
            <input type="submit">
            </form>

        </strong><i class="fa fa-angle-right" style="color: grey"></i>
    </div>
    <div class="list-section">
        <strong>Photo de profil <br><br>

            <form enctype="multipart/form-data" action="edit" method="POST">
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br><br>
                <input type="submit">
            </form>

        </strong><i class="fa fa-angle-right" style="color: grey"></i>
    </div>
    <div class="list-section">
        <strong>Bannière <br><br>

            <form enctype="multipart/form-data" action="edit" method="POST">
                <input type="file" name="banniere">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br><br>
                <input type="submit">
            </form>

        </strong><i class="fa fa-angle-right" style="color: grey"></i>
    </div>
    <div class="list-section">
        <strong>Adresse e-mail</strong><i class="fa fa-angle-right" style="color: grey"></i>
    </div>
    <div class="list-section">
        <strong>Mot de passe</strong><i class="fa fa-angle-right" style="color: grey"></i>
    </div>



    <p class="edit-label">Se deconnecter</p>
    <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <div class="list-section">
            <strong>Deconnexion</strong><i class="fa fa-angle-right" style="color: grey"></i>
        </div>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <div class="edit-end">
        <p>easytrain v0.0.1 MKZ</p>
        <small>Copyright 2018</small>
    </div>

@endsection
