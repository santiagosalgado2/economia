<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaEnergía</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #0066cc;
            text-align: center;
        }
        .content {
            text-align: center;
            margin-top: 50px;
        }
        .content a {
            display: block;
            margin: 10px auto;
            padding: 15px 30px;
            text-decoration: none;
            background-color: #0066cc;
            color: white;
            border-radius: 5px;
            width: 250px;
        }
        .content a:hover {
            background-color: #004da0;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a NovaEnergía</h1>
    <div class="content">
        <a href="?view=historia">Historia de la Empresa</a>
        <a href="?view=mision_vision">Misión y Visión</a>
    </div>

    <?php
    if (isset($_GET['view'])) {
        $view = $_GET['view'];

        switch ($view) {
            case 'historia':
                require_once 'historia.html';
                break;
            case 'mision_vision':
                require_once 'mision_vision.html';
                break;
            default:
                echo '<p>Vista no encontrada.</p>';
                break;
        }
    }
    ?>
</body>
</html>
