
<!-- Modal editar -->
<div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('productos.update',$producto->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">

      <div class="mb-1">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Indique el nombre de la categoría" value="{{$producto->nombre}}">
        </div>


        <div class="mb-3">
          <label for="" class="form-label">Referencia</label>
          <input type="text"
            class="form-control" name="referencia" id="" aria-describedby="helpId" placeholder="Indique la referencia" value="{{$producto->referencia}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Precio</label>
          <input type="number"
            class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="Indique el precio" value="{{$producto->precio}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Peso</label>
          <input type="number"
            class="form-control" name="peso" id="" aria-describedby="helpId" placeholder="Indique el peso" value="{{$producto->peso}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Categoría</label>
          <select name="id_categoria" id="" class="form-control">
            @foreach($categorias as $categoria)
            @if($categoria->id == $producto->id_categoria)
            <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
            @else
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Stock</label>
          <input type="number"
            class="form-control" name="stock" id="" aria-describedby="helpId" placeholder="Indique el Stock" value="{{$producto->stock}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Status</label>
          <input type="number"
            class="form-control" name="status" id="" aria-describedby="helpId" placeholder="1: Activo, 2: Inactivo" value="{{$producto->status}}">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>






<!-- Modal eLIMINAR -->
<div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('productos.destroy',$producto->id)}}" method="post">
        @csrf
        @method('DELETE')
      <div class="modal-body">
        Estas seguro de Eliminar el producto <strong>{{$producto->nombre}}?</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>