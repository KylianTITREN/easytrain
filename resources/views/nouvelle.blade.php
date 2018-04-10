@extends('layouts.head')

<?php

$title = 'publication';
$icons = 'times';

?>

<header class="publication-header">
    <h3 class="publication_title">{{ $title }}</h3>
    <a href="{{URL::previous()}}"><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color: white"></i></a>
</header>

@section('content')

    <div class="publication-bgcolor">
        <section id="publication">

            <form action="/creer" data-pjax method="post" enctype="multipart/form-data">
                <div class="publication-section">

                    <h3>MESSAGE</h3>
                    <div class="publication-bloc">
                        <input class="publication-bloc_description" type="text" name="nom" required autofocus placeholder="Publier votre humeur.." value="{{old('nom')}}"/>
                    </div>

                </div>
                <div class="publication-section">

                    <h3>PHOTO</h3>
                    <div class="publication-bloc">
                        <input type="file" name="photo"/>
                    </div>

                </div>

                {{csrf_field()}}
                <input class="submit" type="submit" placeholder="publier"/>
            </form>

        </section>
    </div>

@endsection

