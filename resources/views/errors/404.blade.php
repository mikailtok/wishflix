@extends('layouts.app')

@section('title', 'Page introuvable')

@section('content')
    <div class="text-center py-20">
        <h1 class="text-6xl font-bold">404</h1>
        <p class="mt-4">Cette page n'existe pas.</p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-6">Retour à l'accueil</a>
    </div>
@endsection
