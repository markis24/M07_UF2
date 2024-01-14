<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>
    <h1>{{$title}}</h1>
    <form action="{{url('/signin')}}" method="post"></form>
    @csrf
    <!--campos del formulario para el inicio de sesión -->
    <div>
        <label for="email">Correu electrònic</label>
        <input type="text" name="email" id="email" />
    </div>
    <div>
        <label for="password">Contrasenya</label>
        <input type="password" name="password" id="password" />
    </div>
    <div>
        <label for="remember">Recorda'm</label>
        <input type="checkbox" name="remember" id="remember" value="1" />
    </div>
    <input type="submit" value="Enviar" />
    <div>

    </form>
    <!-- Enlace para ir a SignUp -->
    <p>No tens un compte? <a href="{{ url('/signup') }}">Crea un compte    </a></p>

</body>

</html>