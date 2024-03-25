<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Veículos</title>
</head>
<body>
    <h1>Lista Veículos</h1>
    <a href="/veiculos">Lista</a>
    <a href="/veiculos/novo">Novo</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FABRICANTE</th>
                <th>MODELO</th>
                <th>CAVALOS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->fabricante }}</td>
                    <td>{{ $v->modelo }}</td>
                    <td>{{ $v->cavalos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>