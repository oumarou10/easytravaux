<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{set_active_route('home')}}"><a href="{{ route('home') }}">Accueil</a></li>
                <li class="{{set_active_route('devis')}}"><a href="{{ route('devis') }}">Devis</a></li>
                <li class="{{set_active_route('about')}}"><a href="{{ route('about') }}">À Propos</a></li>
                <li class="{{set_active_route('contact')}}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
