<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>
    <h1>{{$title}}</h1>
    <form action="{{url('/signup')}}" method="post"></form>
    @csrf
    <div>
        <label for="user_id">Número ID</label>
        <input type="text" name="user_id" id="user_id" />
    </div>
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" />
    </div>
    <div>
        <label for="surname">Cognoms</label>
        <input type="text" name="surname" id="surname" />
    </div>
    <div>
        <label for="password">Contrasenya</label>
        <input type="password" name="password" id="password" />
    </div>
    <div>
        <label for="email">Correu electrònic</label>
        <input type="text" name="email" id="email" />
    </div>
    <div>
        <label for="rol">Rol</label>
        <select name="rol" id="rol">
            <option value="alumnat">Alumne</option>
            <option value="professorat">Professor</option>
            <option value="administrador">Administrador</option>
        </select>
    </div>
    <div>
        <label for="active">Actiu</label>
        <input type="checkbox" name="active" id="active" value="1" />
    </div>
    <input type="submit" value="Enviar" />
    </form>
    <!-- Enlace para ir a SignIn -->
    <p>¿Tens un compte? <a href="{{ url('/signin') }}">Iniciar sessió</a></p>

</body>

</html>