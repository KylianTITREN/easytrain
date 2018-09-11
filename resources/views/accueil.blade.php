@extends('layouts.head')

<?php

$title = 'accueil';
$icons = 'location-arrow';
$icons2 = 'search'

?>

<style>
	header .i1{
		left: 23px!important;
    	right: inherit!important;
	}

	header .i2{
		left: inherit!important;
		right: 23px!important;
	}
</style>

@section('content')

<header>
	<a href="/map"><i class="i1 fa fa-{{ $icons }}" aria-hidden="true" style="color: #7FED72"></i></a>
    <h3>{{ $title }}</h3>
	<a href="/search" data-pjax><i class="i2 fa fa-{{ $icons2 }}" aria-hidden="true" style="color: #7FED72"></i></a>
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
