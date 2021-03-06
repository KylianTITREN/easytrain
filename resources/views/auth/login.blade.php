@extends('layouts.head')

<?php $title = "Connexion" ; ?>

@section('content')

<body>
<div class="container-connexion">

    <style>
        .swiper-slide {
            width: 100%!important;
        }

        .homeForm{
            background-image: none;
        }
        @media screen and (max-width: 350px){
            .swiper-container{
                display: none;
            }

            .top-desc_login{
                height: 20vh;
            }

            .formulaire-login{
                height: 80vh;
            }
        }
    </style>

      <span class="goBack">
        <a href="/" data-pjax><i class="fa fa-angle-left"></i><strong>Retour</strong></a>
      </span>

    <div class="top-desc_login">

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

                    <strong>Suivez les entrainements de vos amis..</strong>

                </div>

                <div class="swiper-slide">

                    <strong>Trouvez le programme qu'il vous faut</strong>

                </div>

            </div>

        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

    </div>

    <div class="formulaire-login">

        <div class="btn-group">
            <a href="{{url('/redirect')}}"><button type="button" name="button" class="btn-register btn-facebook">Connexion avec facebook</button></a>
        </div>

        <div class="ou">
            <span>ou</span>
        </div>

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <span class="formulaire-connexion">

                @if ($errors->has('name'))
                    <p class="help-block">* {{ $errors->first('name') }}</p>
                @endif
                @if ($errors->has('password'))
                    <p class="help-block">* {{ $errors->first('password') }}<p/>
                @endif

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="&#xf2c0;&#32;&#32; Nom d'utilisateur" required>

                </div>

                <div class="{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom: 10px;">
                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="&#xf023;&#32;&#32; Mot de passe" required>

                    <a class="btn btn-link forget-mdp" href="{{ route('password.request') }}">
                    Mot de passe oublié?
                    </a>

                </div>

            </span>

            <div class="btn-group">
                <input type="submit" class="btn-register btn-connexion" value="Se connecter">
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                </label>
            </div>

        </form>

    </div>

</div>
</body>

@endsection