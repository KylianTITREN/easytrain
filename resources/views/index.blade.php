@extends('layouts.head')

@section('content')

    <style>
        .homeForm
        {
            background-image: radial-gradient(circle at 0 0, #00b09b, #7fed72);
            background-repeat: no-repeat;
            background-size: 100% 100vh;
        }

        body{
            background-image: radial-gradient(circle at 0 0, #00b09b, #7fed72);
            background-repeat: no-repeat;
            background-size: 100% 100vh;
        }

    </style>

    @include('_script')

    <body class="homeForm">

    <div class="container">

        <div class="btn-groupe-1">
            @auth
            @else
            <a href="{{ url('/login') }}"><button type="button" name="button">Connexion</button></a>
                    @endauth
        </div>

        <div class="titre-easytrain">
            <h3>easytrain</h3>
        </div>

        <div class="btn-groupe-2">
            @auth
                <a href="/accueil" data-pjax><button type="button" name="button" class="btn-register btn-inscription">Se connecter à {{Auth::user()->name}}</button></a>
                @else
            <a href="{{ url('/register') }}"><button type="button" name="button" class="btn-register btn-inscription">S'inscrire</button></a>
            <a href="{{url('/redirect')}}" data-pjax><button type="button" name="button" class="btn-register btn-facebook">Se connecter avec facebook</button></a>
                @endauth
        </div>

    </div>

    </body>

@endsection

