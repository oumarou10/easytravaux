@extends('layout.default', ['title' => 'Devis'])

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <h1> Devis </h1>
            </div>
        </div>
        <hr class="style3">

        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <h3> Besoin d'un devis </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <p>Besoin d'un devis ? Réalisez-le facilement et gratuitement depuis notre plateforme.</p>

                <form id="Form" action="{{ route('devis') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label for="surface" class="control-label">Type d'appartement: </label> <br>
                        <label class="radio-inline"><input type="radio" name="type_appartement">Maison</label>
                        <label class="radio-inline"><input type="radio" name="type_appartement">Appartement</label>
                        <span class="label label-danger">{{ $errors->first('type_appartement') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('code_postal') ? 'has-error' : ''}}">
                        <label for="code_postal" class="control-label">Code postal:</label>
                        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Entrez votre code postal">
                        <span class="label label-danger">{{ $errors->first('code_postal') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('prestations') ? 'has-error' : ''}}">
                        <label for="surface" class="control-label">Type de travaux:</label> <br>
                        <select class="control-label" name="prestations">
                             @foreach($prestations as $prestation)
                                <option value="{{$prestation}}">{{$prestation}}</option>
                            @endforeach
                        </select>
                        <span class="label label-danger">{{ $errors->First('prestations') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label for="surface" class="control-label">Surface en m2: </label> <br>
                        <input type='number' min="5" class="form-control" name='surface' value='Option One'>
                        <span class="label label-danger">{{ $errors->First('name') }}</span>
                    </div>
                    <h5 class="lowercased text text-right">*champs obligatoires</h5>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyez</button>
                </form>
            </div>

            <div class="adresse col-md-4">
                <img width="100%" src="{{ asset('images/pic_peinture.jpg') }}  ">
            </div>
        </div>

    </div>

    <script>
   </script>

@endsection
