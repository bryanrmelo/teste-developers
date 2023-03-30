<?php
/* Smarty version 3.1.33, created on 2023-03-27 17:24:05
  from '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6421fb65654d26_55172168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87336c4a7af7256f64c631196c8e96779ac2c85d' => 
    array (
      0 => '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/head.html',
      1 => 1679948461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421fb65654d26_55172168 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
">
	<base href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['BASE_DIR']->value)===null||$tmp==='' ? '' : $tmp);?>
">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- metatags -->
	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['METATAGS']->value)===null||$tmp==='' ? 0 : $tmp)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['METATAGS']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?><meta name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" property="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" content="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
	<!-- CSS -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" charset="utf-8"/>
	<link rel="stylesheet" href="css/global.css" type="text/css" media="screen" charset="utf-8"/>
	<link rel="stylesheet" href="css/<?php echo $_smarty_tpl->tpl_vars['PAGE']->value;?>
.css" type="text/css" media="screen" charset="utf-8"/>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/46fef06780.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<?php }
}
