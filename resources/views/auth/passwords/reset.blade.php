@extends('layouts.head')

<?php $title = 'Reset password'; ?>

@section('content')

<div class="container-inscription">

    <div class="top-desc_register" style="height: 60vh;">

        <div class="titre-easytrain2">
            <h3>easytrain</h3>
        </div>
            <strong>Rénitialise ton mot de passe</strong>
            <p>
                Entre ton nouveau mot de passe, ne l'oublie pas cette fois ci !
            </p>
    </div>

    <div class="formulaire-register" style="height: 40vh;">
        <form method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="formulaire-inscription" >
                    @if ($errors->has('email'))
                        <p class='help-block'>* {{ $errors->first('email') }}</p>
                    @endif
                    @if ($errors->has('password'))
                        <p class='help-block'>* {{ $errors->first('password') }}</p>
                    @endif
                    @if ($errors->has('password_confirmation'))
                        <p class='help-block'>* {{ $errors->first('password_confirmation') }}</p>
                    @endif

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">

                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="&#xf003;&#32;&#32; Adresse email" required autofocus>

                        </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="password" type="password" class="form-control" name="password"  placeholder="&#xf023;&#32;&#32; Mot de passe" required>

                        </div>

                        <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <input type="password" name="password_confirmation" id="password-confirm" placeholder="&#xf023;&#32;&#32; Confirmation du mot de passe" required>

                        </div>

                <div class="btn-group">
                <input type="submit" class="btn-register btn-connexion" value="Renitialiser">
            </div>

            </div>

        </form>
    </div>

</div>

@endsection
