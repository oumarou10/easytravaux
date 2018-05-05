@extends('layout.default', ['title' => 'Devis'])

@section('content')
    <div class="container">

        <h1 style="text-align: center"> Devis</h1>

        <form id="Form" action="{{ route('devis') }}" method="post">

           {{ csrf_field() }}&

           <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="type-appartement" class="control-label">Type d'habitation: </label> <br>
            <input type='radio' name='type-appartement' value='Option One'> Appartement
            <input type='radio' name='type-appartement' value='Option Two'> Maison individuelle <br>
            <span class="label label-danger">{{ $errors->first('type-appartement') }}</span>
          </div>

          <div class="form-group {{ $errors->has('code_postal') ? 'has-error' : ''}}">
            <label for="code_postal" class="control-label">Code postal:</label>
            <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Entrez votre code postal">
            <span class="label label-danger">{{ $errors->first('code_postal') }}</span>
          </div>

          <div class="form-group {{ $errors->has('prestations') ? 'has-error' : ''}}">
            <label for="name" class="control-label">Type de travaux: </label> <br>
              <input type='checkbox' name='prestations[]' value='Option One'> Fenetres
              <input type='checkbox' name='prestations[]' value='Option two'> Electricité
              <input type='checkbox' name="prestations[]" value='Option three'> Rénovation salle de bain<br>
              <input type='checkbox' name='prestations[]' value='Option four'> Rénovation cuisine <br>
              <input type='checkbox' name='prestations[]' value='Option five'> Peinture <br>
              <input type="checkbox" name='prestations[]' value='Option six'> Toutes types de rénovations sol - murs <br>
              <input type="checkbox" name='prestations[]' value='Option seven'> Autres
            <span class="label label-danger">{{ $errors->First('prestations') }}</span>
          </div>

          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="surface" class="control-label">Surface en m2: </label> <br>
            <input type='number' min="5" name='surface' value='Option One'>
            <span class="label label-danger">{{ $errors->First('name') }}</span>
          </div>

            <h5 class="lowercased text text-right">*champs obligatoires</h5>

          <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>

        <div id="results"></div>

    </div>

    <script>
   </script>

@endsection


