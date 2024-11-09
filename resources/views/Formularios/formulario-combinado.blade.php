<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alumnos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 80%;
            max-width: 600px;
        }
        h2 {
            text-align: center;
            color: #007BFF;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        button:disabled {
            background-color: #ddd;
            cursor: not-allowed;
        }
        .alert {
            margin-top: 20px;
            padding: 15px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <h2>Datos del Alumno</h2>
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <label for="cui">CUI:</label>
            <input type="text" id="cui" name="cui" required><br>

            <label for="nombre1">Primer Nombre:</label>
            <input type="text" id="nombre1" name="nombre1" required><br>

            <label for="nombre2">Segundo Nombre:</label>
            <input type="text" id="nombre2" name="nombre2"><br>

            <label for="nombre3">Tercer Nombre:</label>
            <input type="text" id="nombre3" name="nombre3"><br>

            <label for="apellido1">Primer Apellido:</label>
            <input type="text" id="apellido1" name="apellido1" required><br>

            <label for="apellido2">Segundo Apellido:</label>
            <input type="text" id="apellido2" name="apellido2"><br>

            <label for="fecha_nac">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nac" name="fecha_nac" required><br>

            <button type="submit">Guardar Alumno</button>
        </form>
        <h2>Datos del Encargado</h2>
        <form action="{{ route('encargados.store') }}" method="POST">
            @csrf
            <label for="dpi">DPI:</label>
            <input type="text" id="dpi" name="dpi" required><br>
            <label for="nombre1">Primer Nombre:</label>
            <input type="text" id="nombre1" name="nombre1" required><br>
            <label for="nombre2">Segundo Nombre:</label>
            <input type="text" id="nombre2" name="nombre2"><br>
            <label for="nombre3">Tercer Nombre:</label>
            <input type="text" id="nombre3" name="nombre3"><br>
            <label for="apellido1">Primer Apellido:</label>
            <input type="text" id="apellido1" name="apellido1" required><br>
            <label for="apellido2">Segundo Apellido:</label>
             <input type="text" id="apellido2" name="apellido2"><br>
             <label for="fecha_nac">Fecha de Nacimiento:</label>
             <input type="date" id="fecha_nac" name="fecha_nac" required><br>
              <label for="tel1">Teléfono 1:</label>
              <input type="text" id="tel1" name="tel1" required><br>
              <label for="tel2">Teléfono 2:</label>
              <input type="text" id="tel2" name="tel2"><br>
              <label for="direcc">Dirección:</label>
              <input type="text" id="direcc" name="direcc"><br>
              <button type="submit">Guardar Encargado</button>
            </form>
    </div>
</body>
</html>
