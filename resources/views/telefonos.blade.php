@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark" data-op="1" data-bs-toggle="modal" data-bs-target="#modalTelefonos">
                <i class="fa-solid fa-circle.plus"></i> Añadir
            </button>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead><tr><th>#</th><th>TELEFONO</th><th>EDITAR</th><th>ELIMINAR</th></tr></thead>
                <tbody class="table-group-divider">
                    @php $i=1; @endphp
                    @foreach($telefonos as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                             <td>{{ $row->telefono }}</td>
                             <td>
                                <a href="{{url('telefonos',[$row]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                            </td>
                            <td>
                                <form method="POST" action="{{url('telefonos',[$row]) }}">
                                    @method("delete")
                                    @csrf
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>   
<div class="modal fade" id="modalTelefonos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal">Añadir Telefonos</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmTelefonos" method="POST" action="{{url("telefonos") }}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                        <input type="text" name="telefono" class="form-control" maxlength="50" placeholder="Telefono" required>
                    </div>
                <div class="d-grid col-6 mx-auto">
                    <button type="btn btn-success" ><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>                                              
@endsection