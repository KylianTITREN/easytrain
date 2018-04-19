@extends('layouts.head')

<?php

$title = 'Profil';
$icons = 'cog';
$page = 'edit';

?>

<style>
    .profil-principal{
        background-color: white;
        width: 100vw;
        border-radius: 40px 40px 0 0;
        box-shadow: -5px -0.5px 2em rgba(0,0,0,0.1);
        min-height: 60vh;
        margin: 0;
        margin-top:30px;
    }

    .profil_sec{
        margin: 20px;
    }

    .profil-principal h3
    {
        font-family: 'Cocogoose';
        font-size: 17px;
        padding: 20px 0 25px 20px;
        color: #414141;
        text-align: left;
    }
    .homeForm{
        background-image: none;
    }

    .add_prog{
        border-radius: 15px;
        cursor: pointer;
        background: linear-gradient(#64bb5a, #7dda74);
        color: white;
        font-size: 14px;
        text-align: center;
        position: absolute;
        top: 160px;
        right: 20px;
        width: 90px;
        padding: 8px;
    }
</style>

@section('content')

    <header style='position: relative; display:flex; align-items: center; justify-content: space-around;height: 150px;  background-image: url("/uploads/banniere/{{ $utilisateur->banniere }}"); background-size: cover; background-repeat: no-repeat;'>
        <div class="profil-header_grid2">
            <div>
                <a href="/followers/{!! $utilisateur->id !!}" style="cursor: pointer" data-pjax>
                <h3>{{count($utilisateur->follow)}}</h3>
                <h1>@if(count($utilisateur->follow)>1)
                        abonnements
                    @else
                        abonnement
                    @endif
                </h1>
                </a>
            </div>
            <div>
                <a href="/follows/{!! $utilisateur->id !!}" style="cursor: pointer" data-pjax>
                <h3>{{count($utilisateur->followMe)}}</h3>
                <h1>@if(count($utilisateur->followMe)>1)
                        abonné(e)s
                    @else
                        abonné(e)
                    @endif
                </h1>
                </a>
            </div>
            <div>
                <a href="/prog/{{$utilisateur->id}}" style="cursor: pointer" data-pjax>
                    <h3 style="z-index: 999;">{{count($utilisateur->program)}}</h3>
                    <h1>@if(count($utilisateur->program)>1)
                            programmes
                        @else
                            programme
                        @endif
                    </h1>
                </a>
            </div>
        </div>
        @auth

        @if($utilisateur->id != Auth::id())

            @else
        <a href="{{ url("/$page") }}" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: white;text-shadow: 2px 2px 5px rgba(0,0,0,0.2);"></i></a>
            @endif

            @endauth
    </header>


<section class="profil_sec">
    <div class="profil-header">
        <div class="profil-header_grid1">
            <div style='z-index: 99; width: 80px; height: 80px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
            <div>
                <h5>{{ $utilisateur->name }}</h5>
                <small>{!! $utilisateur->biographie !!}</small>
                @if($utilisateur->id != Auth::id())
                @if(Auth::user()->follow->contains($utilisateur->id))
                    <a class='add_prog' href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Ne plus suivre</a>
                @else
                    <a class='add_prog' href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Suivre</a>
                @endif
                    @else
                @endif
            </div>
        </div>
    </div>
</section>

    <div class="profil-principal">

        <h3>publications <small style="color: grey;">( {{count($utilisateur->publications)}} )</small></h3>

        @if(count($utilisateur->publications)==0)
            <h4 style="margin-left: 30px; color: #a7a7a7">Pas encore publié</h4>
        @else
        @endif

        @include('_publication', ['publication'=>$utilisateur->publications])

    </div>

    @include('layouts.footer')

@endsection
