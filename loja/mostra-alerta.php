<?php /**
* Created by PhpStorm.
* User: iagof
* Date: 26/10/2017
* Time: 22:30
*/ ?>

<?php
session_start();
function mostraAlerta($tipo) {
    if(isset($_SESSION[$tipo])) { ?>
        <p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo] ?></p>
        <?php
        unset($_SESSION[$tipo]);
    }
} ?>