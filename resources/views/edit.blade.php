@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-4">
        <h5 class="text-center mt-4">Actualizar</h5>
        <div class="row">
            <div class="col">
                <form action="{{route('update', $items->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <label for="tipo">Tipo</label>
                        <select type="text" name="tipo" id="tipo" class="form-select" value="{{$items->tipo}}">
                            <option value="pagos">pagos</option>
                            <option value="gastos">gastos</option>
                        </select>
                        <label for="categoria">Categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" value="{{$items->categoria}}">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{$items->cantidad}}">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$items->descripcion}}">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" value="{{$items->fecha}}">
                        <button class="btn btn-warning mt-3"><i class="fas fa-pen-square"></i> Actualizar</button>
                        <a href="/altasbajas" class="btn btn-info mt-3"><i class="fas fa-long-arrow-left"></i> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection