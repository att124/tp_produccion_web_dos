@extends('componentes.layout')

@section('titulo','Contactos')

@section('contenido')

<main class="ColorPag">

    <section id="contacto" class="py-5">

        <div class="container">


            <form action="{{ route('contactos.update', $contacto->id) }}" method="POST">
                @csrf
                @method('PUT')

            <div class="mb-3">
                <label for="consulta" class="form-label">Mensaje</label>
                <textarea class="form-control" id="consulta" name="consulta" rows="5" disabled>{{ old('consulta', $contacto->consulta) }}</textarea>
            </div>


            <div class="mb-3">
                <label for="respuesta" class="form-label">Respuesta</label>
                <textarea class="form-control" id="respuesta" name="respuesta" rows="5" required>{{ old('respuesta', $contacto->respuesta) }}</textarea>
            </div>

            <div class="centrado">


                <button type="submit" class="btn btn-success tamanobtnvolver">Responder</button>
                <a href="{{ route('contactos.index') }}" class="btn btn-primary mb-3 margenesbtn tamanobtnvolver">Volver</a>

            </div>

            </form>

        </div>

    </section>


</main>

@endsection
