<?php    $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>

<table  width="100%">
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
                    <a href="<?=$base?>/usuario/<?=$usuario['id']; ?>/editar"><i class="fas fa-user-edit color-edit"></i></a>
                    <a href="<?=$base?>/usuario/<?=$usuario['id']; ?>/excluir" onclick="return confirm('Deseja realmente excluir o usuário?')"><i class="fas fa-trash-alt color-del"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php $render('footer'); ?>