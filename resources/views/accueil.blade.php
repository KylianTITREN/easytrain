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

    @if(count($publication) == 0)

        <h3 style="width: 100%; text-align: center; color: rgba(0,0,0,0.2); margin-top: 30px;">Aucune publication</h3>

    @else
    
        @include('_publication', ['publication'=>$publication])

    @endif

</section>

    @include('layouts.footer')

@endsection
