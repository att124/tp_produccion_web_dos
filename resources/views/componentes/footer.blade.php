
<footer class="colorfooter">
    <div class="row">
        <div class="col-12 centrado">
             <img src="{{ asset('imgs/LogoElectra.png') }}" alt="Imágen" width="300" height="80" class="img-fluid rounded espaciado" id="espimg"></div></div>

            <div class="Lineagris"></div>


             <div class="row">

                <div class="col-4">

                    <div class="col-12 centrado"><h3 class="espaciado colorfooter tamanotitfooter">Recomendados</h3></div>
                    @forelse ($categorias as $categoria)
                    <div class="col-12 centrado"><a href="{{route('categorias.mostrar',$categoria->id)}}" class="enlacesfooter">{{$categoria->Categoria}}</a></div>
                    @empty
                    <p class="col-12 centrado">No hay categorias</p>
                    @endforelse

                </div>


                <div class="col-4">

                    <div class="col-12 centrado"><h3 class="espaciado colorfooter tamanotitfooter">Ayuda</h3></div>
                    <div class="col-12 centrado"><a href="{{route('contactos.create')}}" class="espBajo enlacesfooter">Contactos</a></div>

                </div>

                <div class="col-4">

                    <div class="col-12 centrado"> <h3 class="espaciado colorfooter tamanotitfooter">Información</h3></div>
                    <div class="col-12 centrado"><a href="{{route('terminos')}}" class="espBajo enlacesfooter">Información legal</a></div>

                </div>
                <div class="row">

                    <div class="col-12"><p class="espaciado">Atención al cliente:<br/>
                        0800 123 0227<br/>
                        0810 999 2325</p></div>

                </div>

                </div>

                <div class="Lineagris"></div>

                <div class="row">

                    <div class="col-12"><p class="parrafocentrado">Todos los derechos reservados.</p></div>

                </div>

</footer>






