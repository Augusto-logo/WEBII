<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro deVeículos</title>
</head>
<body>
    <h1>Cadastro deVeículos</h1>
    <a href="/veiculos">Lista</a>
    <a href="/veiculos/novo">Novo</a>
    <hr>
    <form action="/veiculos/novo" method="POST">
        @csrf
        <label for="fabricante">Fabricante</label><br>
        <input type="text" name="fabricante" id="fabricante"><br>

        <label for="modelo">Modelo</label><br>
        <input type="text" name="modelo" id="modelo"><br>

        <label for="cavalos">Cavalos</label><br>
        <input type="number" name="cavalos" id="cavalos"><br>

        <br>
        <button>Salvar</button>
    </form>
</body>
</html>