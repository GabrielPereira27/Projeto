@extends ('layout')
@section ('titulo-pagina')
@endsection
@section ('header')
Bicicletas disponíveis em Stock:
@endsection
@section ('conteudo')
<div  class="col-md-6 offset-md-5">
<div   class="card" style="width: 18rem;">
  <img class="card-img-top" src="img6.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bicicleta Estrada</h5>
    <p class="card-text"></p>
    <a href="{{asset('estrada')}}" class="btn btn-primary">Saber mais</a>
  </div>
</div>
</div>
<div  class="col-md-5 offset-md-5">
<div  class="card" style="width: 18rem;">
  <img class="card-img-top" src="img5.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bicicleta Downhill</h5>
    <p class="card-text"></p>
    <a href="{{asset('downhill')}}" class="btn btn-primary">Saber mais</a>
  </div>
</div>
</div>
@endsection