<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Medicamentos para la Tos - Medical Nature</title>
    <link rel="stylesheet" type="text/css" href="animacion.css">
    <link rel="icon" href="file:///F:/proyecto_final_5B/PROTOTIPE_Z/2.5.jpg">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Estilos para el menú */
        .menu {
            background-color: #000; /* Fondo negro */
            color: #FFD700; /* Color oro */
            list-style: none;
            padding: 0;
            display: flex;
            align-items: center; /* Alinea verticalmente los elementos del menú */
        }

        .logo {
            width: 50px; /* Ancho de tu logotipo */
            margin-right: 10px; /* Espacio entre el logotipo y los elementos del menú */
        }
        
        .menu li {
            padding: 10px;
            position: relative;
        }

        .menu li:hover .submenu {
            display: block;
        }

        /* Estilos para el submenú */
        .submenu {
            display: none;
            position: absolute;
            background-color: #000; /* Fondo negro */
            list-style: none;
            top: 100%;
            left: 0;
            width: 160px;
            padding: 0;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.7); /* Efecto luminiscente */
        }

        .submenu li {
            padding: 10px;
            text-align: center;
        }

        /* Estilos adicionales */
        .menu li:hover {
            background-color: rgba(255, 215, 0, 0.5); /* Efecto luminiscente al pasar el ratón */
            cursor: pointer;
        }

        /* Agregamos transiciones suaves para una apariencia más atractiva */
        .menu li,
        .submenu li {
            transition: background-color 0.3s ease;
        }

        /* Estilo para todo el texto de la página */
        body {
            color: #FFD700; /* Texto color oro */
        }

        /* Estilos para los enlaces */
        .menu a {
            text-decoration: none; /* Elimina el subrayado predeterminado */
            color: #FFD700; /* Color oro para los enlaces */
        }

        /* Estilos para el catálogo */
        .catalog {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .catalog-item {
            background-color: #333; /* Fondo gris oscuro */
            color: #FFD700; /* Color oro */
            border: 1px solid #FFD700;
            margin: 10px;
            padding: 20px;
            width: 200px;
            text-align: center;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.7); /* Efecto luminiscente */
        }

        .catalog-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .catalog-item h3 {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #FFD700; /* Color oro */
        }
        
    </style>
</head>
<body bgcolor="black">
    <ul class="menu">
        <img class="logo" src="file:///F:/proyecto_final_5B/PROTOTIPE_Z/2.5.jpg" alt="Tu Logotipo">
        <li><a href="#">Medicamentos
            <ul class="submenu">
                <li><a href="#">Tos</a></li>
                <li><a href="#">Gripa</a></li>
                <li><a href="#">Cabello</a></li>
                <li><a href="#">Pomadas</a></li>
                <li><a href="#">Cremas</a></li>
            </ul>
        </li>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="#">Contactos
            <ul class="submenu">
                <li><a href="#">Información de Contacto</a></li>
                <li><a href="#">Conócenos</a></li>
            </ul>
        </li>
        <li><a href="#">Más</a></li>
    </ul>
    <center>
        <h1>Catálogo de Medicamentos para la Tos</h1>
        <div class="catalog">
            <div class="catalog-item">
                <img src="file:///F:/proyecto_final_5B/PROTOTIPE_Z/medicamento1.jpg" alt="Medicamento 1">
                <h3>Jarabe de Miel</h3>
                <p>Alivia la tos seca y proporciona un efecto calmante.</p>
            </div>
            <div class="catalog-item">
                <img src="file:///F:/proyecto_final_5B/PROTOTIPE_Z/medicamento2.jpg" alt="Medicamento 2">
                <h3>Pastillas de Eucalipto</h3>
                <p>Descongestiona y alivia la irritación de garganta.</p>
            </div>
            <div class="catalog-item">
                <img src="file:///F:/proyecto_final_5B/PROTOTIPE_Z/medicamento3.jpg" alt="Medicamento 3">
                <h3>Té de Hierbas</h3>
                <p>Mezcla de hierbas naturales para aliviar la tos y el resfriado.</p>
            </div>
            <!-- Agrega más elementos de catálogo según sea necesario -->
        </div>
    </center>
    <div class="footer">
        &copy; 2024 Medical Nature. Todos los derechos reservados.
    </div>
  <?php
// Comprobamos si la página se está accediendo mediante un intento de inspección
$isInspected = isset($_GET['inspect']) ? true : false;

// Si se está inspeccionando, muestra un mensaje aleatorio
if ($isInspected) {
    echo "<h1>Contenido Oculto</h1>";
    echo "<p>Este contenido no está disponible para inspección.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Protección de Código PHP</title>
    <script>
        // Deshabilitar el clic derecho
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            // Redirigir a la misma página con el parámetro de inspección
            window.location.href = window.location.href + "?inspect=true";
        });

        // Deshabilitar atajos de teclado (F12 y Ctrl+Shift+I)
        document.addEventListener('keydown', function(e) {
            if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && e.key === 'I')) {
                e.preventDefault();
            }
        });

        // Mensaje de alerta sobre la propiedad intelectual
        window.onload = function() {
            alert("Este código es propiedad intelectual. No está permitido copiarlo.");
        };
    </script>
</body>
</html>