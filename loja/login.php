<?php
require_once ("banco-usuario.php");
require_once 'logica-usuario.php';

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

//var_dump($usuario);

if($usuario == null) {
    $_SESSION['danger'] = 'Usuário ou senha inválida!.';
    header("Location: index.php");
} else {
    $_SESSION['success'] = 'Logado com sucesso!';
    logaUsuario($usuario['email']);
    header("Location: index.php");
}
die();