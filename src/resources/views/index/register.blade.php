{{-- Extiende la plantilla base "page.blade.php" --}}
@extends('page')

{{-- Define el bloque 'title' con el título "Registro" --}}
@section('title', 'Registro')

{{-- Inicia el bloque 'body' para el contenido principal de la página --}}
@section('body')

<div class="wrapper">
    <div class="sidebar" data-image="{{ asset('img/sidebar.jpg') }}">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    PHPDevelopers
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>Registro</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">

                @includeWhen(session('flash_messages'), 'messages', ['flash_messages' => session('flash_messages')])

                <div class="row">
                    {{-- Formularios de login y registro --}}
                    <div class="row">

                        <div class="col-md-6 offset-md-2">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Login</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                    <form action="{{ url('/loginPost') }}" method="post" onsubmit="return validarFormulario()">
                                        @csrf
                                        <div>
                                            <label for="Username">Nombre de Usuario:</label>
                                            <input type="text" id="Username" name="Username" required>
                                        </div>
                                        <div>
                                            <label for="Password">Contraseña:</label>
                                            <input type="password" id="Password" name="Password" required>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-fill pull-right">Acceder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-2">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Registro</h4>
                                </div>
                                
                                <div class="card-body">
                                
                                    <form action="{{ url('/registerPost') }}" method="post" onsubmit="return validarFormulario()">
                                        @csrf
                                        <div>
                                            <label for="Nombre">Nombre:</label>
                                            <input type="text" id="Nombre" name="Nombre" required>
                                        </div>
                                        <div>
                                            <label for="Apellido1">Primer Apellido:</label>
                                            <input type="text" id="Apellido1" name="Apellido1" required>
                                        </div>
                                        <div>
                                            <label for="Apellido2">Segundo Apellido:</label>
                                            <input type="text" id="Apellido2" name="Apellido2" required>
                                        </div>
                                        <div>
                                            <label for="Username">Nombre de Usuario:</label>
                                            <input type="text" id="Username" name="Username" required>
                                        </div>
                                        <div>
                                            <label for="Password">Contraseña:</label>
                                            <input type="password" id="Password" name="Password" required>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-fill pull-right">Registrarse</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <p class="copyright text-center">
                        FP064 Desarrollo back-end con PHP, framework MVC y gestor de contenidos
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>

{{-- Script de validación para los formularios --}}
<script>
    function validarFormulario() {
        let campos = ['nombre', 'apellido1', 'apellido2', 'username', 'password'];
        for (let i = 0; i < campos.length; i++) {
            let valor = document.getElementById(campos[i]).value;
            if (valor.trim() === '') {
                alert('Por favor, completa todos los campos.');
                return false;
            }
        }
        return true;
    }
</script>

@endsection
