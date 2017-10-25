<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 24/10/2017
 * Time: 20:57
 */
session_start();
function verificaUsuario() {
    if(!usuarioLogado()) {
        header('location: index.php?falhaDeSeguranca=true');
        die();
    }
}

function usuarioEstaLogado() {
    return isset($_SESSION['usuario_logado']);
}

function usuarioLogado() {
    return $_SESSION['usuario_logado'];
}

/**
 * @param $usuario
 */
function logaUsuario($email): void
{
    $_SESSION['usuario_logado'] = $email;
}

function logout() {
    session_destroy();
}