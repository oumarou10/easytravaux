@extends('layout.default', ['title' => 'Bienvenue'])
@section('content')

<div class="container">
    <div class="row">
         <div class="col-md-6 col-md-offset-1">
            <h1> Bienvenue </h1>
         </div>
    </div>
    <hr class="style3">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h3> Lorem Ipsum </h3>
            <p>Lorem ipsum ipsum </p>
        </div>

        <div class="adresse col-md-4">
            <h3> Votre titre </h3>
            <p> 112, avenue lénine <br> 93380 Pierrefitte-sur-Seine</p>
            <p><a href="mailto:amadicoulibaly67@gmail.com">amadicoulibaly67@gmail.com</a><br>Tél : 07 58 06 90 48</p>
        </div>
    </div>
</div>

<script>
</script>

@endsection