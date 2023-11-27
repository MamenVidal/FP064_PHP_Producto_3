<!-- Navbar -->
<!-- Inicio de la barra de navegación -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand"> Actos APP </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
    </div>
</nav>
<!-- End Navbar -->

{{-- Inclusión de mensajes --}}
{{-- Blade: Incluye el archivo de mensajes, pasando 'flash_messages' si está disponible --}}
@includeWhen(session('flash_messages'), 'messages', ['flash_messages' => session('flash_messages')])
