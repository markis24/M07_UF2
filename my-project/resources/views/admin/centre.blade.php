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
    <div class="container mt-5">
        <h1>Pàgina del centre</h1>
    </div>
    <div class="container mt-3">
        <h4>Benvingut administrador</h4>
    </div>
    @if(isset($professors) && count($professors) > 0)
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
                    @foreach($professors as $prof)
                        <tr>
                            <td>{{ $prof['id'] }}</td>
                            <td>{{ $prof['name'] }}</td>
                            <td>{{ $prof['email'] }}</td>
                            <td>{{ $prof['actiu'] }}</td>
                            <td>
                                <a href="{{ route('prof.edit', $prof['id']) }}" class="btn btn-outline-primary">Editar</a>
                                
                                <form action="{{ route('prof.destroy', $prof['id']) }}" method="post" style="display: inline;">
                                    @method("delete")
                                    @csrf
                                    <button id="submit" type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>
                            </td>    
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="container mt-5">
            <h1>No hi ha professors</h1>
        </div>
    @endif

    <div class="container mt-5">
        <p class="mt-3"><a href="{{ route('prof.create') }}" class="btn btn-primary">Crear</a></p>
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
