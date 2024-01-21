<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Benvingut professor. El teu email és {{$email}}.</h1>
    </div>
    <body class="bg-light">
        <div class="container mt-5">
            <h3>Llista de alumnes</h3>
            </div>
        <div class="container mt-5">
            <br>
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody class="table-primary">
                    @foreach($alumnes as $alum)
                    <tr>
                        <td>{{ $alum['id'] }}</td>
                        <td>{{ $alum['name'] }}</td>
                        <td>{{ $alum['email'] }}</td>
                        <td>{{ $alum['actiu'] }}</td>
                        <td><a href="{{ route('signin.index') }}">Editar</a></td>
                        <!--Cambiar estilo del boton con Boostrap--->
                        <td><a href="{{ route('signin.index') }}"><button>Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <p class="mt-3"><a href="/prof/create">Crear</a></p>
        </div>
            <div class="container mt-5">
            <p class="mt-3"><a href="{{ route('signin.index') }}">Log out</a></p>
            </div>
    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
