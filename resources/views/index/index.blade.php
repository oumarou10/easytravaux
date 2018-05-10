@extends('layout.default', ['title' => 'Bienvenue'])
@section('content')

<section id="welcome" class="container-fluid">
    <div class="heading">
        <h1>Bienvenue sur travaux facile</h1>
        <h3>Des envies de travaux ? Un devis rapide et gratuit ? <span class="glyphicon glyphicon-chevron-down"></span></h3>
        <a href="{{ route('devis') }}" class="button1">Devis</a>
    </div>
</section>

<section id="recommandations">
    <div class="container">
        <div class="red-divider"></div>
        <div class="heading">
            <h2>Recommandations</h2>
        </div>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h3>"Un travail rapide, efficace et un prix attractif..."</h3>
                    <h4>Maryse Lemoigne</h4>
                </div>
                <div class="item">
                    <h3>"Je suis très satisfait du travail accompli par Amady..."</h3>
                    <h4>Youba Sidibé</h4>
                </div>
                <div class="item">
                    <h3>"Merci pour ton professionnalisme... Je n'hésiterai pas à te recontacter!"</h3>
                    <h4>Aboubacar Cissoko</h4>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</section>

<script>
</script>

@endsection