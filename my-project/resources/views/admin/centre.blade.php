<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Página de Administrador</title>
</head>
<body class="bg-light">
    <h3>Llista de professors</h3>
    <div class="container mt-5">
        <br>
        <br>
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                @foreach($professors as $prof)
                <tr>
                    <td>{{ $prof['nom'] }}</td>
                    <td>{{ $prof['email'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
