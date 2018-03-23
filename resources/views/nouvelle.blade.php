@extends('layouts.head')

<?php

$title = 'Publication';

?>

@section('content')

    <form action="/creer" data-pjax method="post" enctype="multipart/form-data">

        <input type="text" name="nom" required autofocus placeholder="Publier votre humeur.." value="{{old('nom')}}"/>

        <input type="file" name="photo">

        {{csrf_field()}}
        <input type="submit"/>
        
    </form>
    
@endsection

@include('layouts.footer')