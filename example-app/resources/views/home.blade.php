<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pagina de Inicio</title>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenidos a la página principal</h1>

        <x-alert2 type="success">
            <x-slot name="title">
                Titulo de alerta 1
            </x-slot>
            Soy el contenido de la alerta.

        </x-alert2>
    </div>
</body>
</html>