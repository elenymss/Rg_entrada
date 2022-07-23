@extends('layouts.app')

@section('content')
 
    <form action="/registro/{{$registro->id}}" method="POST">
    @method('PUT')
    @csrf
 <div class="container">
   
    <div class="col-3">
    <label for="" name="numerodocumento" class="form-label">Documento</label>
    <input type="text" class="form-control" name="numerodocumento" id="numerodocumento" value="{{$registro->numerodocumento}}">
    </div>
    <div class="col-3">
    <label for="" name="tipo"class="form-label">tipo</label>
    <input type="text" class="form-control" name="tipo" id="tipo" value="{{$registro->tipo}}">
    </div>
    <button type="submit" class="btn btn-primary">enviar</button>
    </div>
</div>
    </form>
@endsection