@extends('layouts.head')

<?php

$title = 'accueil';
$icons = 'comments';

?>

@section('content')

<header>
    <h3>{{ $title }}</h3>
</header>

<section>
    
    @include('_publication', ['publication'=>$publication])

</section>

    @include('layouts.footer')

@endsection
