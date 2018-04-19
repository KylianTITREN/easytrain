@extends('layouts.head')

<?php

$title = 'programmes';
$icons = 'angle-left';

?>

<style>
    .goBack{
        background-color: #65c959;
        border-radius: 50%;
        top:15px!important;
        left: 20px!important;
        width: 30px;
        height: 30px;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .goBack i
    {
        font-size: 32px!important;
        color: white;
    }
</style>

@section('content')

    <header>
        <h3>{{ $title }}</h3>
    </header>

    <span class="goBack">
        <a href="{{ URL::previous() }}" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true"></i></a>
    </span>

    <section style="margin: 20px; margin-bottom: 110px;">

        @if(count($utilisateur->program) == 0)

            <h3 style="width: 100%; text-align: center; color: rgba(0,0,0,0.2); margin-top: 30px;">Aucun programme</h3>

        @else

    @include('_prog', ['programmes'=>$utilisateur->program])

        @endif

    </section>

    @include('layouts.footer')

@endsection