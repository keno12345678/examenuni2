<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .footer {
            background-color: #343a40; /* Fondo oscuro */
            color: #ffffff; /* Texto blanco */
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1); /* Sombra en la parte superior */
        }
        .footer a {
            color: #ffffff; /* Texto blanco */
            text-decoration: none;
            margin: 0 15px;
            transition: all 0.3s ease;
        }
        .footer a:hover {
            text-decoration: underline; /* Subrayado al pasar el mouse */
        }
    </style>
</head>
<body>

<div class="footer">
    <p>
        &copy; <?php echo date("Y"); ?> Tu Examen. Todos los derechos reservados.
    </p>
    <p>
        <a href="{{ route('home') }}">Inicio</a> |
        <a href="{{ route('alumnos.create') }}">Ingreso</a> |
        <a href="{{ route('alumnos') }}">Listado</a>
    </p>
</div>

</body>
</html>
