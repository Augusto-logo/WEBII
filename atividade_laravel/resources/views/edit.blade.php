<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form action="/update/{{ $pizzas->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $pizzas->nome }}"><br><br>

        <label for="tamanho">Tamanho:</label>
        <input type="text" id="tamanho" name="tamanho" value="{{ $pizzas->tamanho }}"><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" value="{{ $pizzas->preço }}"><br><br>

        <label for="nota">Nota:</label>
        <input type="number" id="nota" name="nota" min="0" max="10" step="0.1" value="{{ $pizzas->nota }}"><br><br>

        <label for="vegetariana">Vegetariana:</label>
        <select id="vegetariana" name="vegetariana">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
    <a href="/">Voltar Home</a>
</body>
</html>