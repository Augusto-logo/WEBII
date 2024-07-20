<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tamanho</th>
                <th>Preço</th>
                <th>Nota</th>
                <th>Vegetariana</th>
                <th>Ações</th> <!-- Coluna para ações, como excluir -->
            </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{ $pizza->nome }}</td>
                    <td>{{ $pizza->tamanho }}</td>
                    <td>{{ $pizza->preço }}</td>
                    <td>{{ $pizza->nota }}</td>
                    <td>{{ $pizza->vegetariana }}</td>
                    <td>
                        <form action="/pizzas/{{ $pizza->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                        <form action="/edit/{{ $pizza->id }}" method="GET">
                            <button type="submit">Alterar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <hr>
    <a href="/pizzas">Nova Pizza</a>
</body>
</html>