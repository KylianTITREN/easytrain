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

    .recherche_user .show_user{
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .programme-bloc{
        display: grid;
        grid-template-columns: 0.5fr 0.5fr;
        grid-gap: 10px;
    }

    .add_prog{
        border-radius: 15px;
        cursor: pointer;
        background: linear-gradient(#64bb5a, #7dda74);
        color: white;
        font-size: 16px;
        text-align: center;
        display: block;
        padding: 10px;
    }

</style>

@section('content')

    @include('_script')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <header>
            <input type="text" name="search" id='search' placeholder="&#xf002;&#32;&#32; Rechercher">
    </header>

    <div class="recherche">

        <h3 style="display:flex; width: 100vw; align-items: center; justify-content: center; color: rgba(0,0,0,0.1);"></h3>

    </div>

    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                var str=  $("#search").val();
                if(str == "") {
                    $( ".recherche" ).html("<h3 style=\"display:flex; width: 100vw; align-items: center; justify-content: center; color: rgba(0,0,0,0.1);\">Aucun résultat</h3>");
                }else {
                    $.get( "{{ url('search?id=') }}"+str, function( data ) {
                        $( ".recherche" ).html( data );
                    });
                }
            });
        });
    </script>

    @include('layouts.footer')

@endsection