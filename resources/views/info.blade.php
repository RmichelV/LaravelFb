@foreach ($roles as $rol)
    

<div class="modal fade" id="editar{{$rol->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('roles.update',$rol->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        aria-describedby="helpId"
                        placeholder=""
                        value="{{$rol->name}}"
                    />
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">actualizar</button>
                </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  @endforeach