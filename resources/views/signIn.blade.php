@extends('base')
@section('title')
Rosetta
    @endsection
@section('content')
    <div>
        <h3> S'inscrire a Rosetta </h3>
        <h6> Creation de compte </h6>
    </div>
    <form action="" method="post">
        @csrf
        <div>
            <label for="firstName"> Nom </label>
            <input type="text" id="firstName" name="first_name">
        </div>
        <div>
            <label for="lastName">Prenom </label>
            <input type="text" id="lastName" name="last_name">
        </div>
        <div>
            <label for="email"> Adresse mail </label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="password">Mot de passe (8 caracteres minimum) </label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <span>Rappel des conditions d'utilisations du site web </span>
        </div>
        <div>
            <button type="submit"> <span> Accepter et continuer </span></button>
        </div>
        <div>
            <span>Vous etes deja inscrit ? <a href="#"> Connexion</a> </span>
        </div>
    </form>
    @endsection
