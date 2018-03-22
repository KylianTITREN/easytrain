@extends('layouts.head')

<?php

$title = 'Feed';
$icons = 'comments';

?>

@section('content')

<header>
    <form class="" action="index.html" method="post">
        <input type="text" name="" value="" placeholder="&#xf002;&#32;&#32; Rechercher">
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