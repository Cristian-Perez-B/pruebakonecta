
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('productos.store')}}" method="post">
        @csrf
      <div class="modal-body">
        
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Indique el nombre del Producto">
        </div>


        <div class="mb-3">
          <label for="" class="form-label">Referencia</label>
          <input type="text"
            class="form-control" name="referencia" id="" aria-describedby="helpId" placeholder="Indique la referencia">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Precio</label>
          <input type="number"
            class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="Indique el precio">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Peso</label>
          <input type="number"
            class="form-control" name="peso" id="" aria-describedby="helpId" placeholder="Indique el peso">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Categoría</label>
          <select name="id_categoria" id="" class="form-control">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Stock</label>
          <input type="number"
            class="form-control" name="stock" id="" aria-describedby="helpId" placeholder="Indique el Stock">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Status</label>
          <input type="number"
            class="form-control" name="status" id="" aria-describedby="helpId" placeholder="1: Activo, 2: Inactivo">
        </div>


        

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
      </form>
    </div>
  </div>
</div>