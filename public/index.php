<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inserção de produtos</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

</head>

<body>
    <h1>adicione aqui seu produto</h1>
    <form action="/../database/processaFormulario.php" method="post">
        <div>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <input type="number" name="preco" id="preco" placeholder="Preço">
            <textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
        </div>
        <div>
            <input type="checkbox" name="quantidade" id="dez" value="10">
            <label for="dez">10</label>
            <input type="checkbox" name="quantidade" id="vinte" value="20">
            <label for="dez">20</label>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>