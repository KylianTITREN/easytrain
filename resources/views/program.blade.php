@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

<header>
    <form id="search" action="index.html" method="post">
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
        <li><a href="/profile/{{$u->id}}">{{$u->name}}</a></li>
    @endforeach
</ul>

<h3>Muscles</h3>
@include('_muscles',['muscles'=>$muscles])

@endsection

@extends('layouts.footer')