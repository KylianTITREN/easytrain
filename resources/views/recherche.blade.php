@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

    <header>
        <form id="search">
            <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
            {{csrf_field()}}
            <input type="submit" style="display: none">
        </form>
        <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
    </header>

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

    @include('layouts.footer')

@endsection