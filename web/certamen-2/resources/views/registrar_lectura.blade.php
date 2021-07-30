
@extends('layouts.master_home')

@section('cunt')
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Registrar lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha</label>
                        <input type="date"  id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-txt" class="form-label">Hora</label>
                        <input type="text"  id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Medidor</label>
                        <textarea  id="descripcion-txt" class="form-control">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Direccion</label>
                        <input type="text"  id="direccion-txt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number"  id="valor-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tipo de medida</option>
                            <option value="kW">Kilowatts</option>
                            <option value="W">Watts</option>
                            <option value="C">Temperatura</option>
                          </select>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button type="button" id="registrar-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>



@endsection
