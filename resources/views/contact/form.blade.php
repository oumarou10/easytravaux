@extends('layout.default')

@section('content')
    <div class="container" style="background-color: #DEDED3">

        <h1 style="text-align: center"> Contact </h1>

        <div style="text-align: center">
            <h4>Amady Coulibaly</h4>
            <p>121 avenue Lenine 93390</p>
            <p>Téléphone : 07 58 06 90 48</p>
            <p>Email de contact : amadicoulibaly67@gmail.com</p>
        </div>

        <form id="Form" method="post" enctype="multipart/form-data">

           <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            <label for="title" class="control-label">Prenom </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrez votre prenom">
            <span class="label label-danger">{{ $errors->first('title') }}</span>
          </div>

          <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label for="description" class="control-label">Nom </label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Entrez votre nom">
              <span class="label label-danger">{{ $errors->first('description') }}</span>
          </div>

          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label">Message </label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            <span class="label label-danger">{{ $errors->First('name') }}</span>
          </div>

          <button id="upload-button" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>

        <div id="results"></div>

    </div>

    <script>
   </script>

@endsection
