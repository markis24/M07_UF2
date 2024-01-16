<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>Benvingut administrador. El teu email és {{$email}}.</h1>
    <h4>Llista de professors</h4>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>email</th>
                <th>curs</th>
            </tr>
        </thead>
    <tbody>

    @foreach ($professors as $prof)
        <tr>
            <td>{{$prof['id']}}</td>
            <td>{{$prof['nom']}}</td>
            <td>{{$prof['email']}}</td>
            <td>{{$prof['curs']}}</td>
        </tr>
    @endforeach
</tbody>
</table>
</body>
</html>