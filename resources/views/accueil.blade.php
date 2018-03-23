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
    <div class="publication publication-programme">
        <div class="publication-info">
            <div class="publication-info_avatar">
                <div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ Auth::user()->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
            </div>
            <div class="publication-info_post">
                <h5>{{ Auth::user()->name }}</h5>
                <h>a publié un nouveau programme</h>
            </div>
            <div class="publication-info_time">
                <h>2h<i class="fa fa-clock-o" aria-hidden="true"></i></h>
            </div>
        </div>

        <div class="publication-bloc">
            <div class="publication-content">
                <div class="publication-content_muscle">
                    <img src="icones/icones/bras.png" alt="">
                </div>
                <div class="publication-content_description">
                    <h5>Séance bras et pecs</h5>
                    <span>Temps estimé 15mins</span>
                </div>
                <div class="publication-content_info">
                    <div class="publication-content_info-difficulte">
                        <span>
                            Difficulté
                        </span>
                        <ul>
                            <li><img src="icones/icones/note.png" alt=""></li>
                            <li><img src="icones/icones/note.png" alt=""></li>
                            <li><img src="icones/icones/note.png" alt=""></li>
                            <li><img src="icones/icones/note2.png" alt=""></li>
                            <li><img src="icones/icones/note2.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="publication-content_info-vue">
                        <span>2,3k</span>
                    </div>
                </div>
            </div>
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