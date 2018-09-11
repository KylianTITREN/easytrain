@extends('layouts.head')

<?php

$title = 'Map';
$icons = 'times';

?>

<style>
	.quit-map
        {
            position: absolute;
            z-index: 999;
            background: white;
            border-radius: 100%;
            padding: 10px 13px;
            left: 23px;
            top: 19px;
            font-size: 28px!important;
            color: #7dda74;
        }
</style>

@section('content')

   		<a href="/accueil" data-pjax><i class="quit-map fa fa-{{ $icons }}" aria-hidden="true" style="color: #2EB11F"></i></a>

	<div id="map">
		
	</div>

@endsection