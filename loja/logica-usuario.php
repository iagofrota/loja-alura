<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 24/10/2017
 * Time: 20:57
 */

function verificaUsuario() {
    if(!usuarioLogado()) {
        header('location: index.php?falhaDeSeguranca=true');
        die();
    }
}

function usuarioEstaLogado() {
    return isset($_COOKIE['usuario_logado']);
}

function usuarioLogado() {
    return $_COOKIE['usuario_logado'];
}

/**
 * @param $usuario
 */
function logaUsuario($email): void
{
    setcookie('usuario_logado', $email);
}