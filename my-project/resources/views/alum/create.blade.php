<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('signup.create')}}" method="post">
            @csrf 
            <!-- En parte 4 hay que quitar el campo ID del formulario-->
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="surname">Cognoms</label>
                <input type="text" name="surname" id="surname" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">Contrasenya</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="text" name="email" id="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="alumnat">Alumne</option>
                    <option value="professorat">Professor</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="active" id="active" value="1" class="form-check-input" />
                <label class="form-check-label" for="active">Actiu</label>
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary" />
        </form>
        <p class="mt-3"><a href="{{ route('prof.index') }}">Tornar</a></p>

        <!-- Enlace para volver a la pagina de incio administrador -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
