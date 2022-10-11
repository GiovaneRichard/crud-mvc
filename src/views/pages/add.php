<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
    <label>
        Nome<br/>
        <input type="text" name="name" required />
    </label><br/><br/>
    <label>
        E-mail<br/>
        <input type="email" name="email" required />
    </label><br/><br/>

    <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>