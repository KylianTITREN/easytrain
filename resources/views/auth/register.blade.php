@extends('layouts.head')

<?php $title = "S'inscrire" ; ?>

@section('content')

<body>
<div class="container-inscription">

      <span class="goBack">
        <a href="{{ url('/') }}"><i class="fa fa-angle-left"></i><strong>Retour</strong></a>
      </span>

    <div class="top-desc_register">

        <div class="titre-easytrain2">
            <h3>easytrain</h3>
        </div>
        <strong>Partager vos programmes</strong>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>

        <div class="scroll">
            <span>●</span><span>●</span><span>●</span>
        </div>

    </div>

    <div class="formulaire-register">

        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="formulaire-inscription">

                @if ($errors->has('email'))
                    <p class="help-block">* {{ $errors->first('email') }}</p>
                @endif
                @if ($errors->has('name'))
                    <p class="help-block">* {{ $errors->first('name') }}<p/>
                @endif
                @if ($errors->has('password'))
                    <p class="help-block">* {{ $errors->first('password') }}<p/>
                @endif

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="&#xf2c0;&#32;&#32; Nom d'utilisateur" required autofocus>

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

            </div>

            <div class="btn-group">
                <button type="submit" name="submit" class="btn-register btn-inscription1">S'inscrire</button>

                <a class="btn btn-link forget-mdp" href="{{ url('/login') }}">
                    Déjà inscrit ?
                </a>
            </div>

        </form>

    </div>

</div>
</body>

@endsection