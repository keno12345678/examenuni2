<style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
    }

    .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #343a40; /* Fondo oscuro */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        display: flex;
        justify-content: center;
    }

    .navbar a {
        color: #ffffff; /* Texto blanco */
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .navbar a:hover {
        color: #007bff; /* Texto azul al pasar el mouse */
        background-color: #ffffff; /* Fondo blanco al pasar el mouse */
    }

    .navbar .activo a {
        color: #007bff; /* Texto azul para el enlace activo */
        background-color: transparent;
        border-bottom: 2px solid #007bff; /* Borde inferior azul para el enlace activo */
    }
</style>

<body>
    <div class="navbar">
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('alumnos.create') }}"><a href="{{ route('alumnos.create') }}">Ingreso</a></div>
        <div class="{{ setActivo('alumnos') }} {{ setActivo('alumnos.show') }}"><a href="{{ route('alumnos') }}">Listado</a></div>
    </div>
</body>
