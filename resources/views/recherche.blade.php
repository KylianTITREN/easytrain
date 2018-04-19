@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

<style>
    .recherche h3
    {
        font-family: 'Cocogoose';
        font-size: 17px;
        padding: 10px 0 15px 0;
        color: #414141;
        text-align: left;
    }

    .recherche {
        padding-bottom: 50px;
        margin: 20px 20px;
    }

    .recherche_user a{
        margin-left: 20px;
        display: flex;
        align-items: center;
        margin-bottom: 0px;
    }

    .recherche_user h5 {
        font-size: 18px;
        color: grey;
        margin: 0;
        padding-left: 10px;
        font-weight: 400;
        color: #454545;
    }

    .programme-bloc{
        display: grid;
        grid-template-columns: 0.5fr 0.5fr;
        grid-gap: 10px;
    }

</style>

@section('content')

    @include('_script')

    <header>
        <form id="search">
            <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
            {{csrf_field()}}
            <input type="submit" style="display: none">
        </form>
    </header>

    <div class="recherche">

        @if(count($utilisateur)==0)

        @else

        <h3>utilisateurs</h3>

        @foreach($utilisateur as $u)
            <div class="recherche_user">
                <a href={{url('/profile/'.$u->id)}} data-pjax>
                    <div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $u->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
                    <h5 style="margin: 0; padding-left: 10px">{{$u->name}}</h5>
                </a>
            </div>
        @endforeach

        @if(count($publication)==0)

            @else

            <h3>publications</h3>

            @include('_publication', ['publication'=>$publication])

        @endif

        <div class="programme-bloc">

            <h3>exercices</h3><div></div>

            @include('_exercices', ['muscle'=>$exercices])

        </div>

            <h3>programmes</h3>

            @include('_prog', ['programmes'=>$programmes])

    </div>

    @include('layouts.footer')

@endsection