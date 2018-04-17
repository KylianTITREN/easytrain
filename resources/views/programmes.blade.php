@extends('layouts.head')

<?php

$title = 'programmes';
$icons = 'comments';

?>

@section('content')

    <header>
        <h3>{{ $title }}</h3>
    </header>

    <section style="margin: 20px; margin-bottom: 110px;">

    @include('_prog', ['programmes'=>$utilisateur->program])

    </section>

    @include('layouts.footer')

@endsection