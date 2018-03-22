@extends('layouts.head')

@section('content')

    <body class="homeForm">
    <div class="container">

        <div class="btn-groupe-1">
            <a href="{{ url('/login') }}"><button type="button" name="button">Connexion</button></a>
        </div>

        <div class="titre-easytrain">
            <h3>easytrain</h3>
        </div>

        <div class="btn-groupe-2">
            <a href="{{ url('/register') }}"><button type="button" name="button" class="btn-register btn-inscription">S'inscrire</button></a>
            <a href="{{url('/redirect')}}"><button type="button" name="button" class="btn-register btn-facebook">Se connecter avec facebook</button></a>
        </div>

    </div>
    </body>

@endsection

