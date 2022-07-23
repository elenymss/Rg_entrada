@extends('layouts.app')

@section('content')
<div class="container-sm">
    <a href="/registro/create">nuevo</a>
<button class="btn btn-primary" onclick="location.href='{{route('registro.create')}}'">Nuevo</button>

<table class="table table-dark table-responsive table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Documento</th>
        <th scope="col">Tipo</th>
        <th scope="col"></th>
        
    </tr> 
    </thead>
    <tbody>
    @foreach ($registro as $registros)
    <tr>
        <td scope="row"> {{$registros->id}} </td>
        <td> {{$registros->numerodocumento}} </td>
        <td> {{$registros->tipo}} </td>
        <td >
            <a href="/registro/{{$registros->id}}/edit" class="btn btn-warning ">Editar</a>
        
            <form action="{{route('registro.destroy',$registros)}}" method="POST">
                @method('delete')
                @csrf
            <button class="btn btn-danger ">Eliminar</button>
            </form>    
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection