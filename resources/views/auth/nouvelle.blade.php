@extends('layouts.app')

@section('content')

    @include('_errors')

    <form action="/creer" data-pjax method="post" enctype="multipart/form-data">

        <input type="text" name="nom" required autofocus placeholder="nom de l'image" value="{{old('nom')}}"/>

        <input type="file" name="photo" required/>

        {{csrf_field()}}
        <input type="submit"/>
        
    </form>
    
@endsection 