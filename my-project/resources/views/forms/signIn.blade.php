<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>{{$title}}</title>
</head>

<body>
    <div class="container mt-5">
        <h1>{{$title}}</h1>
        <form action="{{ route('signin.create')}}" method="post">
            @csrf
            <!--campos del formulario para el inicio de sesión -->
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="text" name="email" id="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">Contrasenya</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" value="1" class="form-check-input" />
                    <label class="form-check-label" for="remember">Recorda'm</label>
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary" />
        </form>
        <!-- Enlace para ir a SignUp -->
        <p class="mt-3">No tens un compte? <a href="{{ route('signup.create') }}">Crea un compte</a></p>
    </div>

    <!-- Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>