@extends('componentes.layout')

@section('titulo','Contactos')

@section('contenido')

<main class="ColorPagContacto">
    <section id="contacto" class="py-5">
        <div class="container">

            @if(session('mensaje'))
                 <div class="alert alert-success">
                        {{ session('mensaje') }}
                 </div>
            @endif

            <h2 class="oferta">Contáctanos</h2>
            <form action="{{ route('contactos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" value="{{Auth::user()->name}}" id="name" name="name" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email:</label>
                    <input type="email" class="form-control disable" value="{{ Auth::user()->email }}" id="email" name="email" disabled>
                </div>

                <input type="hidden" value="{{ Auth::user()->id }}" name="fk_user" id="fk_user">

                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto:</label>
                        <select name="asunto" id="asunto" class="form-control">
                                <option value="consulta">Consulta regular</option>
                                <option value="precios">Precios</option>
                                <option value="envios">Envios</option>
                                <option value="horario">Horarios</option>
                        </select>
                </div>
                <div class="mb-3">
                    <label for="consulta" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="consulta" name="consulta" rows="5" required></textarea>
                </div>
                <div class="centrado espaciobtnvolver">
                    <button type="submit" class="btn btn-primary mb-3 tamanobtnvolver2">Enviar</button>
                </div>

            </form>
        </div>
    </section>
</main>

@endsection
