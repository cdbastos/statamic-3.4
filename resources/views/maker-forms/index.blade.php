<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe de Búsqueda y Tabla</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .filter-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
        .filter-item {
            flex: 1;
            min-width: 200px;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions button {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Filtro de Formularios</h1>
<div class="filter-container">
    <div class="filter-item">
        <label for="tipo-formulario">Tipo de Formulario:</label>
        <select id="tipo-formulario">
            <option value="tipo1">Tipo 1</option>
            <option value="tipo2">Tipo 2</option>
            <option value="tipo3">Tipo 3</option>
        </select>
    </div>
    <div class="filter-item">
        <label for="fecha-creacion">Fecha Creación:</label>
        <input type="date" id="fecha-creacion-inicio"> a <input type="date" id="fecha-creacion-fin">
    </div>
    <div class="filter-item">
        <label for="usuario">Usuario:</label>
        <select id="usuario">
            <option value="usuario1">Usuario 1</option>
            <option value="usuario2">Usuario 2</option>
            <option value="usuario3">Usuario 3</option>
        </select>
    </div>
    <div class="filter-item">
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion">
    </div>
</div>

<div class="table-container">
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre del Formulario</th>
            <th>Slug</th>
            <th>Categoría</th>
            <th># de Preguntas</th>
            <th>Activado</th>
            <th>Creado por</th>
            <th>Fecha última request</th>
            <th># de request</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Formulario Ejemplo 1</td>
            <td>formulario-ejemplo-1</td>
            <td>Categoría A</td>
            <td>10</td>
            <td>Sí</td>
            <td>Usuario 1</td>
            <td>2024-07-30</td>
            <td>25</td>
            <td class="actions">
                <button>Editar</button>
                <button>Visualizar</button>
                <button>Ver Respuestas</button>
            </td>
        </tr>
        <!-- Más filas de ejemplo aquí -->
        </tbody>
    </table>
</div>
</body>
</html>
