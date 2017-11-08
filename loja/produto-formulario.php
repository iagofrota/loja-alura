<?php
require_once("cabecalho.php");
require_once 'logica-usuario.php';

verificaUsuario();

$categoria = new Categoria();
$categoria->setNome(1);

$produto = new Produto("", "", "", $categoria, "");

$categoriaDao = new CategoriaDao($conexao);
$categorias = $categoriaDao->listaCategorias($conexao);
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <?php include("produto-formulario-base.php"); ?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
