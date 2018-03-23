@extends('layouts.head')

<?php

$title = 'accueil';
$icons = 'comments';

?>

@section('content')

<header>
    <h3>{{ $title }}</h3>
    <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
</header>

<section>
    
    @include('_publication', ['publication'=>$publication])

    <div class="publication publication-photo">
        <div class="publication-info">
            <div class="publication-info_avatar">
                <img src="img/avatar.png" alt="">
            </div>
            <div class="publication-info_post">
                <h5>Martin</h5>
                <h>a publié un nouvelle photo</h>
            </div>
            <div class="publication-info_time">
                <h>4h<i class="fa fa-clock-o" aria-hidden="true"></i></h>
            </div>
        </div>

        <div class="publication-photo_content">

        </div>

        <div class="publication-footer">
            <div class="publication-footer_like">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <h>503</h>
            </div>
            <div class="publication-footer_comment">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                <h>7</h>
            </div>
        </div>
    </div>





</section>

@endsection

@extends('layouts.footer')