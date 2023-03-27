@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h5 class="text-center mt-4">Agregar Pagos y Gastos</h5>
        <div class="row">
            <div class="col">
                <form action="/store" method="post">
                    @csrf
                    @method('POST')
                    <label for="tipo">Tipo</label>
                    <select type="text" name="tipo" id="tipo" class="form-select">
                        <option value="pagos">pagos</option>
                        <option value="gastos">gastos</option>
                    </select>
                    {{-- <input type="text" name="tipo" id="tipo" class="form-control"> --}}
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                    <button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Guardar</button>
                    <a href="/altasbajas" class="btn btn-info mt-3"><i class="fas fa-long-arrow-left"></i> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection