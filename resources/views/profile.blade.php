@extends('layouts.head')

<?php

$title = 'Profil';
$icons = 'cog';
$page = 'edit';

?>

@section('content')

    <header style='display:flex; align-items: center; justify-content: space-around;height: 150px; border-radius: 0px 0px 30px 30px; background-image: url("/uploads/banniere/{{ $utilisateur->banniere }}"); background-size: cover; background-repeat: no-repeat;'>
        <div class="profil-header_grid2">
            <div>
                <h3>{{count($utilisateur->follow)}}</h3>
                <h1>@if(count($utilisateur->follow)>1)
                        abonnements
                    @else
                        abonnement
                    @endif
                </h1>
            </div>
            <div>
                <h3>{{count($utilisateur->followMe)}}</h3>
                <h1>@if(count($utilisateur->followMe)>1)
                        abonné(e)s
                    @else
                        abonné(e)
                    @endif
                </h1>
            </div>
            <div>
                <h3>{{count($utilisateur->publications)}}</h3>
                <h1>@if(count($utilisateur->publications)>1)
                        publications
                    @else
                        publication
                    @endif
                </h1>
            </div>
        </div>         @auth

        @if($utilisateur->id != Auth::id())
                @if(Auth::user()->follow->contains($utilisateur->id))
                    <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle><i class="fa fa-ellipsis-h" aria-hidden="true" style="color: white;text-shadow: 2px 2px 5px #9a9a9a;"></i></a>
                @else
                    <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle><i class="fa fa-plus-circle" aria-hidden="true" style="color: #7FED72;text-shadow: 2px 2px 5px #9a9a9a;"></i></a>
                @endif
            @else
        <a href="{{ url("/$page") }}" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: white;text-shadow: 2px 2px 5px #9a9a9a;"></i></a>
            @endif

            @endauth
    </header>


<section>
    <div class="profil-header">
        <div class="profil-header_grid1">
            <div style='width: 80px; height: 80px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
            <div>
                <h5>{{ $utilisateur->name }}</h5>
                <p><b>NIVEAU :</b> {!! $utilisateur->niveau->nom !!} / <b>OBJECTIF :</b> {!! $utilisateur->objectif->nom !!}</p>
            </div>
        </div>
    </div>

        @include('_publication', ['publication'=>$utilisateur->publications])

</section>

    @include('layouts.footer')

@endsection
