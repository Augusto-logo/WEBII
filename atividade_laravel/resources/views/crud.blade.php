<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="tamanho">Tamanho:</label>
        <input type="text" id="tamanho" name="tamanho"><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01"><br><br>

        <label for="nota">Nota:</label>
        <input type="number" id="nota" name="nota" min="0" max="10" step="0.1"><br><br>

        <label for="vegetariana">Vegetariana:</label>
        <select id="vegetariana" name="vegetariana">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
    <a href="/">Voltar Home</a>
</body>
</html>