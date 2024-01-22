<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">
        <!-- Contenedor principal -->
        <div class="container mt-5">
            <!-- Título de la lista de alumnos -->
            <h1>Pàgina del professor</h1>
        </div>
    <!-- Verifica si hay datos de alumnos -->
    @if(isset($alumnes) && count($alumnes) > 0)
    
        <!-- Contenedor para la tabla de alumnos -->
        <div class="container mt-5">
            <!-- Tabla para mostrar la información de los alumnos -->
            <table class="table">
                <!-- Encabezados de la tabla -->
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actiu</th>
                        <th scope="col">Accions</th>
                    </tr>
                </thead>
                <!-- Cuerpo de la tabla con datos dinámicos -->
                <tbody class="table-primary">
                    @foreach($alumnes as $alum)
                        <tr>
                            <!-- Datos de cada alumno -->
                            <td>{{ $alum['id'] }}</td>
                            <td>{{ $alum['name'] }}</td>
                            <td>{{ $alum['email'] }}</td>
                            <td>{{ $alum['actiu'] }}</td>
                            <td>
                                <!-- Botones para editar y eliminar -->
                                <a href="{{ route('alum.edit', $alum['id']) }}" class="btn btn-outline-primary">Editar</a>
                                <form action="{{ route('alum.destroy', $alum['id']) }}" method="post" style="display: inline;">
                                    @method("delete")
                                    @csrf
                                    <button id="submit" type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>
                            </td>                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <!-- Mensaje cuando no hay alumnos -->
        <div class="container mt-5">
            <h1>No hi ha alumnes</h1>
        </div>
    @endif

    <!-- Contenedor para botón de crear nuevo alumno -->
    <div class="container mt-5">
        <p class="mt-3"><a href="{{ route('alum.create') }}" class="btn btn-primary">Crear</a></p>
    </div>

    <!-- Contenedor para botón de cerrar sesión -->
    <div class="container mt-5">
        <p class="mt-3"><a href="{{ route('signin.index') }}" class="btn btn-danger">Log Out</a></p>
    </div>

    <!-- Bootstrap JS y Popper.js (necesarios para Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
