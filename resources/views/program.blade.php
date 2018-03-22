@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

<header>
    <form id="search">
        <input type="search" name="search" value="" placeholder="&#xf002;&#32;&#32; Rechercher">
        <input type="submit">
    </form>
    <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
</header>

<section class="programme">

    <a href="{{ url('/muscles') }}">
        <div class="exercice">
            <strong>EXERCICES</strong>
        </div>
    </a>

</section>

<h3>Utilisateurs</h3>
<ul>
    @foreach($utilisateur as $u)
        <li><a href="/utilisateur/{{$u->id}}" data-pjax>{{$u->name}}</a></li>
    @endforeach
</ul>

<h3>Photos</h3>

@endsection

@extends('layouts.footer')