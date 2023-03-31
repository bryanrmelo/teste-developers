<?php
/* Smarty version 3.1.33, created on 2023-03-31 15:23:20
  from '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/editar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_642725183fc811_50595018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e05ab35b920c3e4c0196aea54224534c7cdd0ff' => 
    array (
      0 => '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/editar.html',
      1 => 1680286997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:navbar.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_642725183fc811_50595018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php $_smarty_tpl->_subTemplateRender('file:head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['nome'];?>
">
            </div>
            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['cnpj'];?>
">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['email'];?>
">
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" name="cep" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['cep'];?>
">
            </div>
            <div class=" mb-3">
                <label for="tamanho" class="form-label">Tamanho</label>
                <select class="form-select" aria-label="Default select example" name="tamanho"
                    value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['tamanho'];?>
">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (count($_smarty_tpl->tpl_vars['opcoes']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['opcoes']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['empresa']->value['tamanho']) {?>selected<?php }?>> <?php echo $_smarty_tpl->tpl_vars['opcoes']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</option>
                    <?php }
}
?>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ativo" id="ativo" value="Ativo" <?php if ($_smarty_tpl->tpl_vars['empresa']->value['ativo'] == 'Ativo') {?>checked<?php }?>>
                    <label class="form-label" for="ativo">
                        Ativo
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
">
                <button type="submit" class="btn btn-success mb-3 mt-3" name="atualizar"
                    value="click">Atualizar</button>
            </div>
        </form>
    </div>
    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/46fef06780.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}
