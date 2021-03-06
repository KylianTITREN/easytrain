@extends('layouts.head')

<?php $title = "S'inscrire" ; ?>

@section('content')

<body>

<div class="container-inscription">

    <style>

        html
        {
            height: 100vh;
            overflow: hidden;
        }

        .swiper-slide {
            width: 100%!important;
        }

        .custom-select2 select{
            background-color: #5D5D5D;
            color: #bcbcbc;
            height: 38px;
            border: 0;
            -webkit-appearance: none;
            width: 100%;
            border-radius: 10px;
            font-weight: 300;
            padding-left: 20px;
        }

        .custom-select2 select:focus{
            outline: none;
        }

        .homeForm{
            background-image: none;
        }

        @media screen and (max-width: 350px){
            .swiper-container{
                display: none;
            }

            .top-desc_register{
                height: 20vh;
            }

            .formulaire-register{
                height: 80vh;
            }

            .swiper-pagination-bullets-dynamic
            {
                display: none;
            }
        }
    </style>


    <span class="goBack">
        <a href="/" data-pjax><i class="fa fa-angle-left"></i><strong>Retour</strong></a>
      </span>

    <div class="top-desc_register">

        <div class="titre-easytrain2">
            <h3>easytrain</h3>
        </div>

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <strong>Créez et partagez vos programmes.</strong>
                </div>
                <div class="swiper-slide">
                    <strong>Suivez les entrainements de vos amis.</strong>
                </div>

                <div class="swiper-slide">
                    <strong>Trouvez le programme qu'il vous faut.</strong>
                </div>

            </div>

        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

    </div>

    <div class="formulaire-register">

        <form class="form-horizontal" data-pjax method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="formulaire-inscription">

                @if ($errors->has('email'))
                    <p class="help-block">* {{ $errors->first('email') }}</p>
                @endif
                @if ($errors->has('name'))
                    <p class="help-block">* {{ $errors->first('name') }}</p>
                @endif
                @if ($errors->has('password'))
                        <p class="help-block">* {{ $errors->first('password') }}</p>
                @endif

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="&#xf2c0;&#32;&#32; Nom d'utilisateur" required>

                </div>

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="&#xf003;&#32;&#32; Adresse email" required>

                </div>

                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="&#xf023;&#32;&#32; Mot de passe" required>

                </div>

                <div class="">
                    <input type="password" name="password_confirmation" id="password-confirm" placeholder="&#xf023;&#32;&#32; Confirmation du mot de passe">
                </div>

                    <div class="custom-select2" style="margin-bottom: 15px;">
                        <select name="objectif_id">>
                            <option value="0" disabled selected >Objectif :</option>
                            @foreach(\App\Objectif::all()  as $o)

                                <option value="{!! $o->id !!}">{!! $o->nom !!}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="custom-select2">
                        <select name="niveau_id">
                            <option value="0" disabled selected>Niveau :</option>
                            @foreach(\App\Niveau::all()  as $p)

                                <option value="{!! $p->id !!}">{!! $p->nom !!}</option>

                            @endforeach
                        </select>
                    </div>

            </div>

            <div class="btn-group">
                <button type="submit" name="submit" class="btn-register btn-inscription1">S'inscrire</button>

                <a class="btn btn-link forget-mdp" href="{{ url('/login') }}" data-pjax>
                    Déjà inscrit ?
                </a>
            </div>

        </form>

    </div>

</div>
</body>

@endsection