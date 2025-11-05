<h2>Cadastro de Produto</h2>

<form action="?pg=produtos-cadastro" method="post">

    <label>Nome do Produto:</label>
    <input type="text" name="nome"><br>

    <label>Descrição:</label>
    <textarea name="descricao"></textarea><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco"><br>

    <input type="submit" value="Cadastrar Produto">

</form>