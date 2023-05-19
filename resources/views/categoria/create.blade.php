
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Categoría</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('categorias.store')}}" method="post">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Indique el nombre de la categoría">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Descripcón</label>
          <input type="text"
            class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="Indique la descripción">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Status</label>
          <input type="number"
            class="form-control" name="status" id="" aria-describedby="helpId" placeholder="1: Activo, 2:Inactivo">
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