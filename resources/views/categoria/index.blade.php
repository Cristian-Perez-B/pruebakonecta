@extends('welcome')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Crear Categoria
</button>
<br><br>

    <div class="table-responsive">
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">FECHA CREACIÓN</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($categorias as $categoria)
                <tr class="">
                    <td scope="row">{{$i++}}</td>
                    <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->descripcion}}</td>
                    <td>{{$categoria->status}}</td>
                    <td>{{$categoria->created_at}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                        Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                        Eliminar
                        </button>
                    </td>
                </tr>
                @include('categoria.info')
            @endforeach
            </tbody>
        </table>
    </div>
    @include('categoria.create')



@endsection