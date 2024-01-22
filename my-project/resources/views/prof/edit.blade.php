<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta etiquetas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Formulario</title>
</head>
<body>
    <!-- Contenedor principal -->
    <div class="container mt-5">
        <!-- Formulario de actualización de profesor -->
        <form action="{{ route('prof.update', $prof->id) }}" method="post">
            @csrf
            @method("put")

            <!-- Título del formulario -->
            <div class="container mt-5">
                <h2>Formulari per actualizar dades del professor</h2>
            </div>
            <br>

            <!-- Campos del formulario -->
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $prof['name'] }}" />
            </div>
            <div class="form-group">
                <label for="surname">Cognoms</label>
                <input type="text" name="surname" id="surname" class="form-control" value="{{ $prof['surname'] }}" />
            </div>
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $prof['email'] }}" />
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="alumne">Alumne</option>
                    <option value="professor" selected>Professor</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="active" id="active" value="1" class="form-check-input" {{ $prof['active'] ? 'checked' : '' }} />
                <label class="form-check-label" for="active">Actiu</label>
            </div>

            <!-- Botón de envío -->
            <input type="submit" value="Guardar" class="btn btn-primary" />
        </form>

        <!-- Enlace para volver -->
        <p class="mt-3"><a href="{{ route('prof.index') }}">Tornar</a></p>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
