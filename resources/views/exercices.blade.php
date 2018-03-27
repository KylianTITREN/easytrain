@extends('layouts.head')

<?php

$title = 'Exercices';
$icons = 'comments';

?>

<span class="goBack">
        <a href="{{ URL::previous() }}"><i class="fa fa-angle-left" style="color:#7FED72;"></i></a>
    </span>

@section('content')

        <header>
                <h3>{{ $title }}</h3>
                <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
        </header>

        <ul>

                @foreach ($muscles as $muscles)

                    @foreach ($muscles->exercices as $exercices_muscles)
                        <li><a href="#">{{$exercices_muscles->nom}}</a></li><br>
                    @endforeach

                @endforeach
        </ul>

        @include('layouts.footer')

@endsection