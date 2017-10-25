<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 24/10/2017
 * Time: 21:41
 */
include 'logica-usuario.php';
logout();
header('location: index.php?logout=true');
die();