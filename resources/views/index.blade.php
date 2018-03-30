@extends('layouts.head')

@section('content')

    <body class="homeForm">


    <!--

    style="position: absolute; height: 100%; top: 0; z-index: 99;"
    <video  width="200" autoplay>
        <source src="{{ asset('storage/videos/loader-easytrain.mp4') }}"  type="video/mp4" />
    </video>
    
    -->

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
                <a href="{{ url('/profile/'.Auth::user()->id) }}"><button type="button" name="button" class="btn-register btn-inscription">Se connecter à {{Auth::user()->name}}</button></a>
                @else
            <a href="{{ url('/register') }}"><button type="button" name="button" class="btn-register btn-inscription">S'inscrire</button></a>
            <a href="{{url('/redirect')}}"><button type="button" name="button" class="btn-register btn-facebook">Se connecter avec facebook</button></a>
                @endauth
        </div>

    </div>
    </body>

@endsection

