<nav class="navbar navbar-default navbar-static-top" style="background-color: #337ab7">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color: white" href="{{ route('home') }}">Travaux facile 93</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('home') }}" style="color: white">Home</a></li>
        <li ><a href="{{ route('devis') }}" style="color: white">Devis</a></li>
        <li><a href="{{ route('contact') }}" style="color: white">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>