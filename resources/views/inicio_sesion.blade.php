@include('componentes.navbar')

<main>

    <h1 class="oferta text-center mt-5">Login</h1>

    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <form action="#" method="post" class="border p-5 cc">
                        <div class="form-group">
                            <label for="usuario" class="espacioini letrasini">Usuario:</label>
                            <input type="text" id="usuario" name="usuario" class="form-control espacioini" required>
                        </div>
                        <div class="form-group">
                            <label for="pass" class="espacioini letrasini">Contraseña:</label>
                            <input type="password" id="pass" name="pass" class="form-control espacioini" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </form>
                </div>
                <div class="col-12 text-center mt-3">
                    <a href="#">¿No tienes una cuenta?</a> |
                    <a href="#">¿Necesitas ayuda?</a>
                </div>
            </div>
        </div>
    </section>

</main>

<p class="espaciado">Electra emporium</p>

@include('componentes.footer')
