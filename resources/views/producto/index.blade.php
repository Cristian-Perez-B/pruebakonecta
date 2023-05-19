@extends('welcome')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Crear Producto
</button>
<br><br>

    <div class="table-responsive">
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">REFERENCIA</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">PESO</th>
                    <th scope="col">CATEGORÍA</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">FECHA CREACIÓN</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($productos as $producto)
                <tr class="">
                    <td scope="row">{{$i++}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->referencia}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->peso}}</td>
                    <td>{{$producto->Categoria->nombre}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->status}}</td>
                    <td>{{$producto->created_at}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                        Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                        Eliminar
                        </button>
                    </td>
                </tr>
                @include('producto.info')
            @endforeach
            </tbody>
        </table>
    </div>
    @include('producto.create')



@endsection