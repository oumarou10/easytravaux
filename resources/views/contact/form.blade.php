@extends('layout.default', ['title' => 'Contact'])

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <h1> Contact </h1>
            </div>
        </div>

        <hr class="style3">

        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <h3> Nous écrire </h3>
                <p>Une question ? Appelez-moi au : 07 58 06 90 48 ou envoyez-nous un message ci-dessous.</p>

                 <form id="form" action="{{ route('contact') }}" method="post">

                   {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                        <label for="name" class="control-label">Nom*</label>
                        <input type="text" class="form-control" id="title" name="name" value="{{ old('name') }}" placeholder="Entrez votre nom">
                        <span class="label label-danger">{{ $errors->first('name') }}</span>
                    </div>

                     <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="telephone" class="control-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="email" name="telephone" value="{{ old('telephone')}}" placeholder="Entrez votre numéro de téléphone">
                        <span class="label label-danger">{{ $errors->first('telephone') }}</span>
                     </div>

                     <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">Adresse email*</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }} "placeholder="Entrez votre nom">
                        <span class="label label-danger">{{ $errors->first('email') }}</span>
                     </div>

                     <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label for="message" class="control-label">Message </label>
                        <textarea class="form-control" name="message" rows="4"></textarea>
                        <span class="label label-danger">{{ $errors->First('message') }}</span>
                     </div>

                     <h5 class="lowercased text text-right">*champs obligatoires</h5>

                     <button id="upload-button" type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
                </form>

            </div>

            <div class="adresse col-md-4">
               <h3> Adresse </h3>
                <p> 112, avenue lénine <br> 93380 Pierrefitte-sur-Seine</p>
                <p><a href="mailto:amadicoulibaly67@gmail.com">amadicoulibaly67@gmail.com</a><br>Tél : 07 58 06 90 48</p>
            </div>
        </div>

    </div>

    <script>
   </script>

@endsection
