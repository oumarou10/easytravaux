@extends('layout.default')

@section('content')
    <div class="container">

        <h1 style="text-align: center"> Devis</h1>

        <form id="Form" method="post" enctype="multipart/form-data">

           <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label">Type d'habitation: </label> <br>
            <input type='radio' name='checkboxvar[]' value='Option One'> Appartement
            <input type='radio' name='checkboxvar[]' value='Option Two'> Maison individuelle <br>
            <span class="label label-danger">{{ $errors->First('name') }}</span>
          </div>

          <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            <label for="title" class="control-label">Code postal:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title">
            <span class="label label-danger">{{ $errors->first('title') }}</span>
          </div>

          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label">Type de travaux: </label> <br>
            <input type='checkbox' name='checkboxvar[]' value='Option One'> Rénovation salle de bain<br>
            <input type='checkbox' name='checkboxvar[]' value='Option Two'> Rénovation cuisine <br>
            <input type='checkbox' name='checkboxvar[]' value='Option Three'> Peinture <br>
              <input type='checkbox' name='checkboxvar[]' value='Option Three'> Toutes types de rénovations sol - murs

            <span class="label label-danger">{{ $errors->First('name') }}</span>
          </div>

          <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label for="description" class="control-label">Message:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
              <span class="label label-danger">{{ $errors->first('description') }}</span>
          </div>

          <button id="upload-button" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>

        <div id="results"></div>

    </div>

    <script>
   </script>

@endsection


