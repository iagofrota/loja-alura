<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 24/10/2017
 * Time: 21:41
 */
require_once 'logica-usuario.php';
logout();
$_SESSION["success"] = "Deslogado com sucesso.";
header('location: index.php');
die();