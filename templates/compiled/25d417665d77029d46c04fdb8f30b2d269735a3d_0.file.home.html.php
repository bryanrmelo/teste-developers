<?php
/* Smarty version 3.1.33, created on 2023-03-30 17:25:29
  from '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6425f039d71e37_46956753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d417665d77029d46c04fdb8f30b2d269735a3d' => 
    array (
      0 => '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/home.html',
      1 => 1680207927,
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
function content_6425f039d71e37_46956753 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
</head>

<body>
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-8">
						<h2><b>Empresas</b></h2>
					</div>
					<div class="col-sm-4">
						<button type="button" class="btn btn-info add-new" data-bs-toggle="modal"
							data-bs-target="#modalAdicionar"><i class="fa fa-plus"></i> Adicionar</button>
					</div>
				</div>
			</div>
			<table class="table table-striped table-bordered" id="tabelaEmpresas">
				<caption>Lista de empresas</caption>
				<thead>
					<tr>
						<th scope="col">CNPJ</th>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
						<th scope="col">CEP</th>
						<th scope="col">Tamanho</th>
						<th scope="col">Ativo</th>
						<th scope="col">Ação</th>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresas']->value, 'empresa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->value) {
?>
					<tr>
						<th><?php echo $_smarty_tpl->tpl_vars['empresa']->value["cnpj"];?>
</th>
						<td><?php echo $_smarty_tpl->tpl_vars['empresa']->value["nome"];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['empresa']->value["email"];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['empresa']->value["cep"];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['empresa']->value["tamanho"] == 0) {?><td>Pequeno Porte</td><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['empresa']->value["tamanho"] == 1) {?><td>Médio Porte</td><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['empresa']->value["tamanho"] == 2) {?><td>Grande Porte</td><?php }?>
						<td><?php echo $_smarty_tpl->tpl_vars['empresa']->value["ativo"];?>
</td>
						<td>
							<a href="editar?editId=<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
" style="color:green">
								<i class="fa fa-pencil" aria-hidden="true"></i></a>
							<a href="home?deleteId=<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
" style="color:red"
								onclick="confirm('Tem certeza que deseja remover?')">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</a>
						</td>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>

		</div>
		<!-- MODAL PARA ADICIONAR -->
		<div class="modal fade" id="modalAdicionar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Adicionar nova empresa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post">
							<div class="mb-3">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" name="nome">
							</div>
							<div class="mb-3">
								<label for="cnpj" class="form-label">CNPJ</label>
								<input type="text" class="form-control" name="cnpj" placeholder="00.000.000/0001-00">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="mb-3">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" name="cep">
							</div>
							<div class="mb-3">
								<label for="tamanho" class="form-label">Tamanho</label>
								<select class="form-select" aria-label="Default select example" name="tamanho">
									<option value="0" selected>Pequeno Porte</option>
									<option value="1">Médio Porte</option>
									<option value="2">Grande Porte</option>
								</select>
							</div>
							<div class="mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="ativo" id="ativo"
										value="Ativo">
									<label class="form-label" for="ativo">
										Ativo
									</label>
								</div>
							</div>
							<button type="submit" class="btn btn-success mb-3 mt-3" name="btnAdicionar"
								value="click">Salvar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(document).ready(function () {
			$('#tabelaEmpresas').DataTable({
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
				},
				responsive: true
			});
		});
	<?php echo '</script'; ?>
>

	<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
