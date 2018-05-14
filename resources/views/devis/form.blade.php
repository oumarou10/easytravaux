@extends('layout.default', ['title' => 'Devis'])

@section('content')
    <div class="container">
        <div class="head_title row">
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

        <section>
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <p>Besoin d'un devis ? Réalisez-le facilement et gratuitement depuis notre plateforme.</p>

                    <form id="Form" action="{{ route('devis') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('type_appartement') ? 'has-error' : ''}}">
                            <label for="type_appartement" class="control-label">Pièce à travailler* </label> <br>
                            @foreach($items as $item)
                                <label class="radio-inline"><input type="radio" name="type_appartement" value="{{ $item }}"> {{ $item }}</label>
                            @endforeach
                            <span class="label label-danger">{{ $errors->first('type_appartement') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('code_postal') ? 'has-error' : ''}}">
                            <label for="code_postal" class="control-label">Code postal*</label>
                            <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Entrez votre code postal">
                            <span class="label label-danger">{{ $errors->first('code_postal') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('prestations') ? 'has-error' : ''}}">
                            <label for="prestations" class="control-label">Type de travaux*</label> <br>
                            <select class="control-label" name="prestations">
                                 @foreach($prestations as $prestation)
                                    <option value="{{$prestation}}">{{$prestation}}</option>
                                @endforeach
                            </select>
                            <span class="label label-danger">{{ $errors->first('prestations') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('surface') ? 'has-error' : ''}}">
                            <label for="surface" class="control-label">Surface en m2*</label> <br>
                            <input type='number' min="5" class="form-control" name='surface' value='Option One'>
                            <span class="label label-danger">{{ $errors->first('surface') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
                            <label for="telephone" class="control-label">Numéro de téléphone </label>
                            <input type="text" class="form-control" id="email" name="telephone" value="{{ old('telephone')}}" placeholder="Entrez votre numéro de téléphone">
                            <span class="label label-danger">{{ $errors->first('telephone') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                            <label for="email" class="control-label">Adresse email*</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }} "placeholder="Entrez votre nom">
                            <span class="label label-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                            <label for="message" class="control-label">N'hésitez pas à apporter des précisions </label>
                            <textarea class="form-control" name="message" rows="4"></textarea>
                            <span class="label label-danger">{{ $errors->first('message') }}</span>
                         </div>

                        <div class="button">
                            <h5 class="lowercased text text-right">*champs obligatoires</h5>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyez</button>
                        </div>

                    </form>
                </div>

                <div class="adresse col-md-4">
                    <img width="100%" alt="image peinture" src="{{ asset('images/pic_peinture.jpg') }} ">
                </div>
            </div>
        </section>


    </div>

    <script>
   </script>

@endsection
