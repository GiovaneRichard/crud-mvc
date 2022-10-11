<?php    $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?=$usuario['id']; ?></td>
                <td><?=$usuario['name']; ?></td>
                <td><?=$usuario['email']; ?></td>
                <td>
                    <a href=<?= ?>">[ Editar ]</a>
                    <a href="">[ Excluir ]</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php $render('footer'); ?>