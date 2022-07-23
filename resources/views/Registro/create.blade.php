@extends('layouts.app')

@section('content')
 
    <form action="/registro" method="POST">
    @csrf
 <div class="container">
   
    <div class="col-3">
    <label for="" name="numerodocumento" class="form-label">Documento</label>
    <input type="text" class="form-control" name="numerodocumento" aria-describedby="emailHelp">
    </div>
    <div class="col-3">
    <label for="" name="tipo"class="form-label">tipo</label>
    <input type="text" class="form-control" name="tipo">
    </div>
    <button type="submit" class="btn btn-primary">enviar</button>
    </div>
</div>
    </form>
@endsection