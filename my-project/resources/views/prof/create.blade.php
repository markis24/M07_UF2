<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulario Professor</title>
</head>

<body>
    <div class="container mt-5">
        <form action="{{ route('prof.store')}}" method="post">
            @csrf
            <div class="container mt-5">
                <h3>Formulari per afegir un nou usuari professor</h3>
            </div>

            <!-- Name Input -->
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <!-- Surname Input -->
            <div class="form-group">
                <label for="surname">Cognoms</label>
                <input type="text" name="surname" id="surname" class="form-control" />
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Contrasenya</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="text" name="email" id="email" class="form-control" />
            </div>

            <!-- Role Selection -->
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="alumne">Alumne</option>
                    <option value="professor" selected>Professor</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>

            <!-- Active Checkbox -->
            <div class="form-group form-check">
                <input type="checkbox" name="actiu" id="actiu" value="1" class="form-check-input" />
                <label class="form-check-label" for="actiu">Actiu</label>
            </div>

            <!-- Submit Button -->
            <input type="submit" value="Guardar" class="btn btn-primary" />
        </form>

        <!-- Return Link -->
        <p class="mt-3"><a href="{{ route('prof.index') }}">Tornar</a></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
