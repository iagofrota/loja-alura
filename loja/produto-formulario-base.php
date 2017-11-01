<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 26/10/2017
 * Time: 23:02
 */

require_once ("class/Produto.php");
require_once ("class/Categoria.php");
?>
<tr>
    <td>Nome</td>
    <td> <input class="form-control" type="text" name="nome" value="<?= $produto->nome ?>"></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input  class="form-control" type="number" name="preco" value="<?= $produto->preco ?>"></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea class="form-control" name="descricao"><?= $produto->descricao ?></textarea></td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="usado" <?= $produto->$usado ? 'checked' : '' ?> value="true"> Usado
</tr>
<tr>
    <td>Categoria</td>
    <td>
        <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) :
                $essaEhACategoria = $produto->categoria->id == $categoria->id;
                $selecao = $essaEhACategoria ? 'selected' : "";
                ?>
                <option value="<?= $categoria->id ?>" <?= $selecao ?>>
                    <?= $categoria->nome ?>
                </option>
            <?php endforeach ?>
        </select>
    </td>
</tr>