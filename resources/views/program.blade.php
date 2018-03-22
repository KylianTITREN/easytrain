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

@endsection

@extends('layouts.footer')