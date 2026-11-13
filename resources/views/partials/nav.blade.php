<header class="navbar wishflix-shell__navbar bg-base-200 px-6">
    <div class="flex-1">
        <a href="{{ route('home') }}" class="text-xl font-bold">WishFlix</a>
    </div>
    <nav class="flex items-center gap-4">
        <a href="{{ route('home') }}" class="link link-hover">Accueil</a>
        <a href="{{ route('wishlist') }}" class="link link-hover">
            Wishlist <span class="badge badge-primary">0</span>
        </a>
        <span class="opacity-70">Invité</span>
        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Se connecter</a>
    </nav>
</header>
