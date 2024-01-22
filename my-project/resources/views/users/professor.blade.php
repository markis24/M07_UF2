<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <body class="bg-light">
        @if(isset($alumnes) && count($alumnes) > 0)

        <div class="container mt-5">
            <h3>Llista de alumnes</h3>
            </div>
            <div class="container mt-5">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actiu</th>
                            <th scope="col">Accions</th>
                        </tr>
                    </thead>
                <tbody class="table-primary">
                    @foreach($alumnes as $alum)
                    <tr>
                        <td>{{ $alum['id'] }}</td>
                        <td>{{ $alum['name'] }}</td>
                        <td>{{ $alum['email'] }}</td>
                        <td>{{ $alum['actiu'] }}</td>
                        <td>
                            <a href="{{ route('alum.edit', $alum['id']) }}" class="btn btn-primary">Editar</a>
                            <a href="{{ route('alum.destroy', $alum['id']) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="container mt-5">
            <h3>No hi ha alumnes</h3>
        </div>
    @endif
    <div class="container mt-5">
        <p class="mt-3"><a href="{{ route('alum.create') }}" class="btn btn-primary">Crear</a></p>
    </div>

    <div class="container mt-5">
        <p class="mt-3"><a href="{{ route('signin.index') }}" class="btn btn-danger">Log Out</a></p>
    </div>
    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
