<?php
/**
 * Created by PhpStorm.
 * User: iagof
 * Date: 26/10/2017
 * Time: 23:02
 */
?>
<tr>
    <td>Nome</td>
    <td> <input class="form-control" type="text" name="nome" value="<?= $produto->getNome() ?>"></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input  class="form-control" type="number" name="preco" step="0.01" value="<?= $produto->getPreco() ?>"></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea class="form-control" name="descricao"><?= $produto->getDescricao() ?></textarea></td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="usado" <?= $produto->isUsado() ? 'checked' : '' ?> value="true"> Usado
</tr>
<tr>
    <td>Categoria</td>
    <td>
        <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) :
                $essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId();
                $selecao = $essaEhACategoria ? 'selected' : "";
                ?>
                <option value="<?= $categoria->getId() ?>" <?= $selecao ?>>
                    <?= $categoria->getNome() ?>
                </option>
            <?php endforeach ?>
        </select>
    </td>
</tr>