<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once('logica-usuario.php');
require_once ("class/produto.php");

verificaUsuario();
?>

<?php
$produto = new Produto();

$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST['categoria_id'];

//$nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
//$preco = mysqli_real_escape_string($conexao, $_POST["preco"]);
//$descricao = mysqli_real_escape_string($conexao, $_POST["descricao"]);
//$categoria_id = mysqli_real_escape_string($conexao, $_POST["categoria_id"]);

if(array_key_exists('usado', $_POST)) {
    $produto->usado = "true";
} else {
    $produto->usado = "false";
}

if(insereProduto($conexao, $produto)) { ?>
    <p class="text-success">O produto <?= $produto->nome; ?>, <?= $produto->preco; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">O produto <?= $produto->nome; ?> não foi adicionado: <?= $produto->msg ?></p>
    <?php
}
?>

<?php include("rodape.php"); ?>
