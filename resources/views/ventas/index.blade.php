@extends('welcome')

@section('content')
<form action="{{route('ventas.vender')}}" method="post">
@csrf

@if(Session::has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show"" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            {{Session::get('error_message')}}
        </div>
    @elseif(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show"" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            {{Session::get('success_message')}}
        </div>
    @endif

<div class="row form-group">
    <div class="col-md-6">
        <label for="" class="form-label">Producto</label>
        <select name="producto" id="" class="form-control">
            @foreach($productos as $producto)
                <option value="{{$producto->id}}">{{$producto->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad">
    </div>
    
    <div class="form-group">
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Vender</button>
        </div>
    </div>
</div>
</form>


<div class="table-responsive">
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del Producto</th>
                <th scope="col">Stock</th>
                <th scope="col">Fecha Venta</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            
            @foreach($ventas as $venta)
            <tr>
            <td scope="row"> {{$i++}} </td>
                <td>{{$venta->producto->nombre}}</td>
                <td>{{$venta->amount}}</td>
                <td>{{$venta->created_at}}</td>
</tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection