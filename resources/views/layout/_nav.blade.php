<nav class="navbar navbar-default navbar-static-top" style="">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{set_active_route('home')}}"><a href="{{ route('home') }}" style="color: white">Accueil</a></li>
                <li class="{{set_active_route('devis')}}"><a href="{{ route('devis') }}" style="color: white">Devis</a></li>
                <li class="{{set_active_route('about')}}"><a href="{{ route('about') }}" style="color: white">À Propos</a></li>
                <li class="{{set_active_route('contact')}}"><a href="{{ route('contact') }}" style="color: white">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>