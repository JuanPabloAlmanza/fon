@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar telefono</div>
            <div class="card-body"></div>
                      <form id="frmTelefonos" method="POST" action="{{url("modelos",[$modelo]) }}">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="sigla" value="{{ $modelo->sigla}}" class="form-control" maxlength="50" placeholder="Sigla" required>
                    </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                        <input type="text" name="region" value="{{ $modelo->region}}" class="form-control" maxlength="50" placeholder="Region" required>
                    </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                        <input type="float" name="precio" value="{{ $modelo->precio}}" class="form-control" maxlength="50" placeholder="Precio" required>
                    </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="id_telefono" class="form-select" required>
                            <option value="">Modelo</option>
                            @foreach($telefonos as $row)  
                            @if($row->id == $modelo->id_telefono)                                                                                             
                                <option selected value="{{ $row->id}}">{{ $row->telefono}}</option>                                
                            @else 
                                <option value="{{ $row->id}}">{{ $row->telefono}}</option>
                            @endif   
                                                         
                            @endforeach
                        </select>
                    </div>
                <div class="d-grid col-6 mx-auto">
                    <button type="btn btn-success" ><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
                </div>    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection