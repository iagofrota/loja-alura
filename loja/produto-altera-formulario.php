<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");
require_once ("class/Produto.php");
require_once ("class/Categoria.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);

$selecao_usado = $produto->usado ? "checked='checked'" : "";
$produto->usado = $selecao_usado;
?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto->id?>">
    <table class="table">
        <?php include("produto-formulario-base.php"); ?>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
