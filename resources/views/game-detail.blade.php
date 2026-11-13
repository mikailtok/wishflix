@extends('layouts.app')

@section('title', $game['title'])

@section('content')
    <div class="flex flex-col md:flex-row gap-8">
        <img src="{{ $game['cover_url'] }}" alt="{{ $game['title'] }}" class="w-64 rounded-lg">
        <div>
            <h1 class="text-3xl font-bold">{{ $game['title'] }}</h1>
            <p class="opacity-70">{{ $game['category'] }} · {{ $game['release_year'] }} · ⭐ {{ $game['rating'] }}/10</p>
            <p class="mt-4">{{ $game['synopsis'] }}</p>
            <p class="mt-4">Plateformes : {{ implode(', ', $game['platforms']) }}</p>
            <a href="{{ route('home') }}" class="btn mt-6">← Retour au catalogue</a>
        </div>
    </div>
@endsection
