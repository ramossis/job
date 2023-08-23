@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-2">
            <div class="float-sm-right">
                <a href="{{ route('jobs.create') }}" class="btn btn-primary btn-sm">Nuevo Trabajo<i class="fa fa-user-plus"></i></a>
            </div>
        </div>
        <h2 id="title">Lista de Trabajos</h2>
        <div class="table responsive-sm">
        <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Categoria</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Opciones</th>
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
                <td class="md-2 btn-group">
                    <a href="{{route('jobs.edit',$val->id)}}"><button class="btn btn-warning">Editar</button></a>
                <form action="{{route('jobs.destroy',$val->id)}}"
                    method="POST" onsubmit="return confirm('Seguro desea eliminar este registro?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger s-5">
                        Eliminar</button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
<script>
  const $table=document.querySelector("#id");
  console.log($table);
</script>
