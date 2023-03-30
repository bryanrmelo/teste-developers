<?php
/* Smarty version 3.1.33, created on 2023-03-28 15:44:52
  from '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_642335a4f1d2b7_04312058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d417665d77029d46c04fdb8f30b2d269735a3d' => 
    array (
      0 => '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/home.html',
      1 => 1680029087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:navbar.html' => 1,
  ),
),false)) {
function content_642335a4f1d2b7_04312058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/bryan/Desenvolvimento/GitHub/teste-developers/plugins/smarty/libs/plugins/function.html_table.php','function'=>'smarty_function_html_table',),));
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php $_smarty_tpl->_subTemplateRender('file:head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
			<table class="table table-striped table-bordered">
				<caption>Lista de empresas</caption>
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">CNPJ</th>
						<th scope="col">Email</th>
						<th scope="col">CEP</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Astron Mídia</td>
						<td>00000000000</td>
						<td>astron@email.com</td>
						<td>CEP</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
					</tr>
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
						<form>
							<div class="mb-3">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome">
							</div>
							<div class="mb-3">
								<label for="cnpj" class="form-label">CNPJ</label>
								<input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0001-00">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="Email">
							</div>
							<div class="mb-3">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" id="cep">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-success">Salvar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL PARA EDITAR -->
		<div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Adicionar nova empresa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="mb-3">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome">
							</div>
							<div class="mb-3">
								<label for="cnpj" class="form-label">CNPJ</label>
								<input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0001-00">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="Email">
							</div>
							<div class="mb-3">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" id="cep">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-success">Salvar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL PARA REMOVER -->
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Adicionar nova empresa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="mb-3">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome">
							</div>
							<div class="mb-3">
								<label for="cnpj" class="form-label">CNPJ</label>
								<input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0001-00">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="Email">
							</div>
							<div class="mb-3">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" id="cep">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-success">Salvar</button>
					</div>
				</div>
			</div>
		</div>
	</div>



	<footer>
		<p>
			&copy; Copyright by RB Team
		</p>
	</footer>
	</div>
	</div>

	<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>"first,second,third,fourth",'tr_attr'=>$_smarty_tpl->tpl_vars['tr']->value),$_smarty_tpl);?>


</body>

</html><?php }
}
