<?php include "cabecalho.php"; ?>
    <h1>Formulário de cadastro</h1>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <tr>
                <td>Produto:</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>preco:</td>
                <td><input class="form-control" type="number" name="preco"></td>
            </tr>            <tr>
                <td>Descrição:</td>
                <td><textarea  class="form-control" name="descricao"></textarea></td>
            </tr>

            <tr>
                <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php"; ?>
 
