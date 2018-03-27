@extends('program')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('recherche')

    <h3>Utilisateurs</h3>
    <ul>
    @foreach($utilisateur as $u)
            <li><a href="/profile/{{$u->id}}">{{$u->name}}</a></li>
    @endforeach
    </ul>
    <h3>Publications</h3>
    <ul>
        @include('_publication', ['publication'=>$publication])
    </ul>

@endsection