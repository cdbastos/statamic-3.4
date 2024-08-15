<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIC - Inscripción a Jornadas de Formación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E0F7FA;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #0288D1;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .breadcrumb {
            background-color: white;
            padding: 10px;
            border-bottom: 1px solid #B0BEC5;
        }

        .breadcrumb p {
            margin: 0;
            color: #01579B;
            font-size: 14px;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .description {
            background-color: white;
            border: 1px solid #B0BEC5;
            padding: 20px;
            width: 80%;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .description p {
            margin: 0;
            font-size: 18px;
            color: #01579B;
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            background-color: #039BE5;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0288D1;
        }

        footer {
            background-color: #0288D1;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
<header>
    <h1>SIC - Sistema de Información</h1>
</header>
<nav class="breadcrumb">
    <p>Inicio &gt; Formación &gt; Inscripción</p>
</nav>
<main>
    <section class="description">
        <p>Inscripción a jornadas de formación de la SIC</p>
    </section>
    <section class="button-container">
        <a href="#" class="button">Formulario de Inscripción</a>
    </section>
</main>
<footer>
    <p>© 2024 SIC. Todos los derechos reservados.</p>
</footer>
</body>
</html>
