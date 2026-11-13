@extends('layouts.app')

@section('title', 'Accueil')

@section('styles')
    @vite('resources/css/home.css')
@endsection

@section('content')
    @if ($featured)
        <section class="hero wishflix-hero" aria-labelledby="hero-title">
            <figure class="wishflix-hero__backdrop">
                <img src="https://via.assets.so/game.png?id={{ $featured->id }}&q=95&w=1600&h=900&fit=cover"
                    alt="Image de couverture de {{ $featured->title }}" width="1600" height="900" />
            </figure>
            <div class="wishflix-hero__veil" aria-hidden="true"></div>

            <div class="hero-content wishflix-hero__content">
                <div class="wishflix-hero__text">
                    <p class="wishflix-hero__kicker">Nouveaute WishFlix</p>
                    <div class="wishflix-hero__meta">
                        <span class="badge badge-primary">A la une</span>
                        <span class="badge badge-ghost">{{ $featured->category->name }}</span>
                        <span class="badge badge-outline">{{ $featured->platforms->pluck('name')->implode(', ') }}</span>
                    </div>

                    <h1 id="hero-title" class="wishflix-hero__title">{{ $featured->title }}</h1>
                    <p class="wishflix-hero__description">{{ $featured->synopsis }}</p>
                    <p class="wishflix-hero__details">
                        {{ $featured->release_year }} | {{ $featured->rating }}/10 | {{ $featured->playtime_hours }}h de jeu
                    </p>

                    <div class="wishflix-hero__actions">
                        <a class="btn btn-primary btn-lg" href="{{ route('games.show', $featured->id) }}">Voir la fiche</a>
                        <button class="btn btn-outline btn-lg">Ajouter a la wishlist</button>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="wish-section" aria-labelledby="catalogue-title">
        <header class="wish-section__header">
            <div>
                <h2 class="wish-section__title" id="catalogue-title">Catalogue</h2>
                <p class="wish-section__subtitle">Filtres, navigation et cards dynamiques</p>
            </div>
            <div class="wish-section__actions">
                <div class="wish-home__filters">
                    <label class="form-control wish-home__search" for="game-search">
                        <span class="label-text">Rechercher</span>
                        <input id="game-search" type="search" class="input input-bordered" placeholder="Titre ou mot-cle" />
                    </label>

                    <label class="form-control" for="game-category">
                        <span class="label-text">Categorie</span>
                        <select id="game-category" class="select select-bordered">
                            <option value="all">Toutes</option>
                            <option value="RPG">RPG</option>
                            <option value="Action">Action</option>
                            <option value="Aventure">Aventure</option>
                        </select>
                    </label>

                    <button class="btn btn-secondary">Disponibles uniquement</button>
                </div>
            </div>
        </header>

        <div class="wish-section__stats">
            <div class="stats shadow wish-home__stats" role="group" aria-label="Statistiques catalogue">
                <div class="stat">
                    <div class="stat-title">Jeux disponibles</div>
                    <div class="stat-value text-primary">{{ $games->count() }}</div>
                </div>
                <div class="stat">
                    <div class="stat-title">Resultats filtres</div>
                    <div class="stat-value text-secondary">{{ $games->count() }}</div>
                </div>
                <div class="stat">
                    <div class="stat-title">Ma wishlist</div>
                    <div class="stat-value text-accent">3</div>
                </div>
            </div>
        </div>

        <div class="wish-section__content">
            <div class="wish-home__grid">
                @forelse ($games as $game)
                    <article class="card movie-card game-card" aria-label="Jeu {{ $game->title }}">
                        <figure class="game-card__cover">
                            <img src="{{ $game->cover_url }}" alt="Affiche de {{ $game->title }}" width="300" height="450" />
                        </figure>

                        <div class="card-body game-card__body">
                            <div class="game-card__badges">
                                <span class="badge badge-secondary">{{ $game->category->name }}</span>
                                <span class="badge badge-success">{{ $game->status }}</span>
                            </div>

                            <h3 class="card-title game-card__title">{{ $game->title }}</h3>
                            <p class="game-card__meta">{{ $game->release_year }} - {{ $game->platforms->pluck('name')->implode(', ') }}</p>

                            <div class="game-card__rating" aria-label="Note moyenne">
                                <span class="game-card__rating-value">{{ $game->rating }}</span>
                                <span class="game-card__rating-max">/10</span>
                            </div>

                            <p class="game-card__synopsis">{{ $game->synopsis }}</p>

                            <div class="card-actions game-card__actions">
                                <a class="btn btn-sm btn-ghost" href="{{ route('games.show', $game->id) }}"
                                    aria-label="Voir les details de {{ $game->title }}">
                                    Details
                                </a>
                                <button class="btn btn-sm btn-outline">Wishlist</button>
                            </div>
                        </div>
                    </article>
                @empty
                    <p>Aucun jeu disponible.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
