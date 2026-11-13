@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Catalogue</h1>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @forelse ($games as $id => $game)
            <div class="card bg-base-200 shadow">
                <figure><img src="{{ $game['cover_url'] }}" alt="{{ $game['title'] }}"></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $game['title'] }}</h2>
                    <p>{{ $game['category'] }} · {{ $game['release_year'] }}</p>
                    <p>⭐ {{ $game['rating'] }}/10</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('games.show', $id) }}" class="btn btn-primary btn-sm">Details</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Aucun jeu pour le moment.</p>
        @endforelse
    </div>
@endsection
