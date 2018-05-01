@extends('layout.default', ['title' => 'Contact'])

@section('content')
    <div id="container_contact" class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                <h1 id="form_content"> Contact </h1>
                 <form id="form" action="{{ route('contact') }}" method="post">

                   {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                        <label for="name" class="control-label">Nom*</label>
                        <input type="text" class="form-control" id="title" name="name" value="{{ old('name') }}" placeholder="Entrez votre nom">
                        <span class="label label-danger">{{ $errors->first('name') }}</span>
                    </div>

                     <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="telephone" class="control-label">Numéro de téléphone*</label>
                        <input type="text" class="form-control" id="email" name="telephone" value="{{ old('telephone') }}" placeholder="Entrez votre numéro de téléphone">
                        <span class="label label-danger">{{ $errors->first('telephone') }}</span>
                     </div>

                     <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">Adresse email*</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }} "placeholder="Entrez votre nom">
                        <span class="label label-danger">{{ $errors->first('email') }}</span>
                     </div>

                     <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label for="message" class="control-label">Message </label>
                        <textarea class="form-control" name="message" rows="6"></textarea>
                        <span class="label label-danger">{{ $errors->First('message') }}</span>
                     </div>

                     <button id="upload-button" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>

            </div>
        </div>

    </div>

    <script>
   </script>

@endsection
