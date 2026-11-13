@extends('layouts.app')

@section('title', $game['title'])

@section('styles')
    @vite('resources/css/game-detail.css')
@endsection

@section('content')
        <section class="wish-detail">
            <figure class="wish-detail__backdrop">
                <img src={{ $game['cover_url'] }}
                    alt="Image de couverture de The Witcher 3" width="1600" height="900" />
            </figure>

            <div class="wish-detail__veil" aria-hidden="true"></div>

            <div class="wish-detail__content">
                <a class="btn btn-ghost btn-sm" href="{{ route('home') }}">Retour au catalogue</a>

                <p class="wish-detail__kicker">Fiche jeu</p>
                <h1 class="wish-detail__title">{{ $game['title'] }}</h1>

                <div class="wish-detail__meta">
                    <span class="badge badge-primary">{{ $game['category'] }}</span>
                    <span class="badge badge-outline">{{ $game['release_year'] }}</span>
                    <span class="badge badge-ghost">{{ implode(', ', $game['platforms']) }}</span>
                </div>

                <p class="wish-detail__description">
                    {{ $game['synopsis'] }}
                </p>

                <ul class="wish-detail__facts" aria-label="Informations sur le jeu">
                    <li>
                        <strong>Note:</strong>
                        {{ $game['rating'] }}/10
                    </li>
                    <li>
                        <strong>Duree:</strong>
                        100h de jeu
                    </li>
                    <li>
                        <strong>Etat:</strong>
                        Disponible
                    </li>
                </ul>

                <div class="wish-detail__actions">
                    <button class="btn btn-secondary">Ajouter a la wishlist</button>
                    <a class="btn btn-outline" href="{{ route('wishlist') }}">Voir ma wishlist</a>
                </div>
            </div>
        </section>
@endsection