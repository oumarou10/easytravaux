@extends('layout.default', ['title' => 'À propos'])

@section('content')

<div class="container">
    <div class="head_title row">
        <div class="col-md-6 col-md-offset-1">
            <h1> À Propos </h1>
        </div>
    </div>
    <section>
        <hr class="style3">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <div id="history">
                    <h3> Un peu d'histoire ?</h3>
                    <p> Nous ? Plutôt moi, Amady Coulibaly originaire d'afrique de l'ouest venu en France depuis 30ans. J'ai commencé à travaillé dans la peinture dans mon (beau) pays natal le Mali.
                    <p>Après de longues années en tant qu'employé plus précisément 23 ans durant lesquelles j'ai parfait mon savoir-faire, j'ai décidé de me lançer en auto-entrepreneur pour être mon propre patron</p>
                    <p> Pour étendre mon offre j'ai eu l'idée de créer un site web: et voici <em>travaux-facile</em>, LE site pour tous vos travaux.</p>
                </div>

                <div>
                    <h3 id="service"> Services </h3>
                    <p>Travaux facile, vous permettra de nous mettre en contact plus facilement, via notre formulaire, et également mon numéro de téléphone, je compte bien évidemment sur vous ne pas m'appeler trop tard :p.<br>
                        Je suis joignable sur mon numéro 7j/7 de 6h00 à 23h00.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
</script>

@endsection