@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <div class="max-w-sm mx-auto card bg-base-200 p-6">
        <h1 class="text-2xl font-bold mb-4">Connexion</h1>
        <form>
            <input type="email" placeholder="Email" class="input w-full mb-3">
            <input type="password" placeholder="Mot de passe" class="input w-full mb-3">
            <button type="button" class="btn btn-primary w-full">Se connecter</button>
        </form>
    </div>
@endsection
