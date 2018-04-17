@extends('layouts.head')

<?php $title = 'Reset password'; ?>

@section('content')

    <div class="container-connexion">

      <span class="goBack">
        <a href="{{ url('/login') }}" data-pjax><i class="fa fa-angle-left"></i><strong>Retour</strong></a>
      </span>

        <div class="top-desc_forgotten">

            <div class="titre-easytrain2">
                <h3>easytrain</h3>
            </div>
            @if (session('status'))
                <strong>Vérifie ta boite mail !</strong>
                <p>
                    {{ session('status') }}
                </p>
            @else
                <strong>Mot de passe oublié ?</strong>
                <p>
                    Pas de soucis, entre ton adresse et un mail te seras envoyé avec un lien pour rénitialiser ton mot de passe !
                </p>

            @endif
        </div>

        <div class="formulaire-forgotten">
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <span class="formulaire-connexion">
                @if ($errors->has('email'))
                    <p class='help-block'>* {{ $errors->first('email') }}</p>
                @endif

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="&#xf003;&#32;&#32; Adresse email" required autofocus>

                </div>

                <div class="btn-group">
                <input type="submit" class="btn-register btn-connexion" value="Envoyer le mail">
            </div>

            </span>

        </form>
        </div>

    </div>
@endsection
