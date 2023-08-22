@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Lista de Trabajos</h2>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Categoria</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
                @foreach($jobs as $val)
              <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->user->name}}</td>
                <td>{{$val->categories->nombre}}</td>
                <td>{{$val->title}}</td>
                <td>{{$val->description}}</td>
                <td>{{$val->status}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
