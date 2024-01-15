<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <h2>Benvingut administrador. El teu email és {{$email}}.</h2>
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

    @foreach ($collection as $item)
        <tr>
            <td>{{$professors['id']}}</td>
            <td>{{$professors['nom']}}</td>
            <td>{{$professors['email']}}</td>
            <td>{{$professors['curs']}}</td>
        </tr>
    @endforeach
</tbody>
</table>
</body>
</html>