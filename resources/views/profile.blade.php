@extends('layouts.head')

<?php

$title = 'Profil';
$icons = 'cog';
$page = 'edit';

?>

@section('content')

    <header style='display:flex; align-items: center; justify-content: space-around;height: 150px; border-radius: 0px 0px 30px 30px; background-image: url("/uploads/banniere/{{ Auth::user()->banniere }}"); background-size: cover; background-repeat: no-repeat;'>
        <div class="profil-header_grid2">
            <div>
                <h3>54</h3>
                <h1>programmes</h1>
            </div>
            <div>
                <h3>12</h3>
                <h1>programmes</h1>
            </div>
            <div>
                <h3>30</h3>
                <h1>programmes</h1>
            </div>
        </div>
        <a href="{{ url("/$page") }}"><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: white;text-shadow: 2px 2px 5px #9a9a9a;"></i></a>
    </header>


<section>
    <div class="profil-header">
        <div class="profil-header_grid1">
            <div style='width: 80px; height: 80px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ Auth::user()->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
            <div>
                <h5>{{ Auth::user()->name }}</h5>
            </div>
        </div>
    </div>
    <div class="profil-content">
        <h5>programme</h5>

    </div>
</section>

@endsection

@extends('layouts.footer')
