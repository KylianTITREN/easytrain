@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

<span class="goBack">
        <a href="{{ URL::previous() }}"><i class="fa fa-angle-left" style="color:#7FED72;"></i></a>
    </span>

@section('content')

    <header>
        <form id="search">
            <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
            <input type="submit">
        </form>
        <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
    </header>

    <h3>Utilisateurs</h3>
    <ul>
    @foreach($utilisateur as $u)
            <li><a href="/profile/{{$u->id}}" data-pjax>{{$u->name}}</a></li>
    @endforeach
    </ul>

@endsection

@extends('layouts.footer')