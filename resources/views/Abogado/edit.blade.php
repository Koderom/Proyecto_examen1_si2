@extends('layouts.Dashboard')
@section('estilo')
    <link rel="stylesheet" href="{{ asset('style/create.css') }}">
@endsection
@section('contenido')
    <div class="contenedor-create">
        
        <h2 class="titulo-principal">
            EDITAR DATOS
        </h2>
        <section>
            <h2 class="titulo">
                Ingrese los datos del abogado
            </h2>
            <form method="POST" action="{{ route('abogado.update', $abogado) }}" class="formulario" autocomplete="off">
                @method('put')
                @csrf
                <div class="contenedor-entrada">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{old('nombre',$abogado->persona->nombre)}}">
                    @error('nombre')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="contenedor-entrada">
                    <label for="ci">Numero de documento de identidad</label>
                    <input type="number" id="ci" name="ci" value="{{old('ci',$abogado->persona->ci)}}">
                    @error('ci')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="contenedor-entrada">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" value="{{old('edad',$abogado->persona->edad)}}"> 
                    @error('edad')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="contenedor-entrada">
                    <label for="direccion">Direccion de referencia</label>
                    <input type="text" id="direccion" name="direccion" value="{{old('direccion',$abogado->persona->direccion)}}">
                    @error('direccion')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="contenedor-entrada">
                    <label for="direccion">Direccion trabajo</label>
                    <input type="text" id="direccion_trabajo" name="direccion_trabajo" value="{{old('direccion_trabajo',$abogado->direccion_trabajo)}}">
                    @error('direccion_trabajo')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="contenedor-entrada">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo">
                        @if ($abogado->persona->sexo[0]=='H')
                            <option value="1" selected>Hombre</option>
                            <option value="2">Mujer</option>    
                        @else
                            <option value="1">Hombre</option>
                            <option value="2" selected>Mujer</option>
                        @endif
                        
                    </select>
                    @error('sexo')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                
                <div class="contenedor-entrada">
                    <label for="telefono">Numero de telefono</label>
                    <input type="number" name="telefono" id="telefono" value="{{old('telefono',$abogado->persona->telefono)}}">
                    @error('telefono')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="contenedor-entrada">
                    <label for="telefono_trabajo">Telefono trabajo</label>
                    <input type="number" name="telefono_trabajo" id="telefono_trabajo" value="{{old('telefono_trabajo',$abogado->telefono_trabajo)}}">
                    @error('telefono_trabajo')
                        <small class="mensaje-error">*{{$message}}</small><br>
                    @enderror
                </div>
                <div class="opciones">
                    <button type="submit" class="boton-crear"> Guardar cambios</button>
                    <a href="{{ route('abogado.index')}}"" class="boton-salir">Cancelar</a>
                </div>
            </form>
        </section>    
    </div>
    

@endsection
