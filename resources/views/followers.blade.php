@extends('layouts.head')

<?php

$title = 'abonnements';
$icons = 'angle-left';

?>

<style>
    .goBack{
        background-color: #65c959;
        border-radius: 50%;
        top:15px!important;
        left: 20px!important;
        width: 30px;
        height: 30px;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .goBack i
    {
        font-size: 32px!important;
        color: white;
    }

    .recherche_user{
        display: flex;
        align-items: center;
    }

    .recherche_user a{
        margin-left: 20px;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .recherche_user .show_user{
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .recherche_user h5 {
        font-size: 18px;
        margin-left: 10px;
        color: grey;
    }

    .add_prog{
        border-radius: 15px;
        cursor: pointer;
        background: linear-gradient(#64bb5a, #7dda74);
        color: white;
        font-size: 16px;
        text-align: center;
        display: block;
        padding: 10px;
    }
</style>

@section('content')

    <span class="goBack">
        <a href="/profile/{{$utilisateur->id}}" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true"></i></a>
    </span>

    <header>
        <h3>{{ $title }}</h3>
    </header>

    <section style="margin: 20px; margin-bottom: 110px;">

        @foreach($utilisateur->follow as $u)
            <div class="recherche_user">
                <div class="show_user">
                    <a href={{url('/profile/'.$u->id)}} data-pjax>
                        <div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $u->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
                        <h5>{{$u->name}}</h5>
                    </a>

                    @if($u->id != Auth::id())
                    @if(Auth::user()->follow->contains($u->id))
                        <a class='add_prog' href="/suivi/{{$u->id}}" data-pjax-toggle>Ne plus suivre</a>
                    @else
                        <a class='add_prog' href="/suivi/{{$u->id}}" data-pjax-toggle>Suivre</a>
                    @endif
                        @endif
                </div>
            </div>
        @endforeach
    </section>

    @include('layouts.footer')

@endsection