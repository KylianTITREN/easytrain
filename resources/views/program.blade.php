@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

<header>
    <form id="search" data-pjax>
        <input type="search" name="search" placeholder="&#xf002;&#32;&#32; Rechercher" required>
        <input type="submit" style="display: none">
    </form>
    <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
</header>

<section class="programme">

    <a href="{{ url('/muscles') }}" data-pjax>
        <div class="exercice">
            <strong>EXERCICES</strong>
        </div>
    </a>

    <br>

    @yield('recherche')

</section>

@include('layouts.footer')

@endsection