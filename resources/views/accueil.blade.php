@extends('layouts.head')

<?php

$title = 'accueil';
$icons = 'comments';

?>

@section('content')

<header>
    <h3>{{ $title }}</h3>
    <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
</header>

<section>
    
    @include('_publication', ['publication'=>$publication])

</section>

    @include('layouts.footer')

@endsection
