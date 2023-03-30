<?php
/* Smarty version 3.1.33, created on 2023-03-29 21:48:15
  from '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6424dc4f558288_52808308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d417665d77029d46c04fdb8f30b2d269735a3d' => 
    array (
      0 => '/Users/bryan/Desenvolvimento/GitHub/teste-developers/templates/home.html',
      1 => 1680137271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
    'file:navbar.html' => 1,
  ),
),false)) {
function content_6424dc4f558288_52808308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
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
					<div class="col-sm-9">
						<h2><b>Empresas</b></h2>
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-info add-new" data-bs-toggle="modal"
							data-bs-target="#modalAdicionar"><i class="fa fa-plus"></i> Adicionar</button>
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-warning add-new" data-bs-toggle="modal"
							data-bs-target="#modalBuscarEdicao"><i class="fas fa-edit"></i> Editar</button>
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-danger add-new" data-bs-toggle="modal"
							data-bs-target="#modalBuscarRemocao"><i class="fas fa-ban"></i> Remover</button>
					</div>
				</div>
			</div>
			<table class="table table-striped table-bordered">
				<caption>Lista de empresas</caption>
				<thead>
					<tr>
						<th scope="col">CNPJ</th>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
						<th scope="col">CEP</th>
						<th scope="col">Tamanho</th>
						<th scope="col">Ativo</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['empresa']->value["tamanho"];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['empresa']->value["ativo"];?>
</td>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
			<div aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="home?pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
" aria-label="Anterior">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPaginas']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPaginas']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
					<li class="page-item"><a class="page-link" href="home?pagina=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
					<?php }
}
?>
					<!-- CONSERTAR -->
					<li class="page-item">
						<a class="page-link" href="home?pagina=<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
" aria-label="Próximo">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</div>
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
									<input class="form-check-input" type="checkbox" name="ativo" id="ativo" value="1">
									<label class="form-label" for="ativo">
										Ativo
									</label>
								</div>
							</div>
							<button type="submit" class="btn btn-success mb-3 mt-3" name="adicionar"
								value="click">Salvar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL PARA BUSCAR PARA A EDIÇÃO -->
		<div class="modal fade" id="modalBuscarEdicao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Buscar empresa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form method="post">
						<div class="modal-body">
							<div class="form-floating">
								<select class="form-select form-select mb-3" id="floatingSelect"
									aria-label=".form-select example" name="metodoBusca">
									<option value="cnpj">CNPJ</option>
									<option value="nome">Nome</option>
									<option value="email">Email</option>
									<option value="cep">CEP</option>
								</select>
								<label for="floatingSelect">Selecione como deseja pesquisar</label>
							</div>
							<div class="mb-3">
								<input type="text" class="form-control" id="busca" placeholder="Pesquisar" name="busca">
							</div>
							<div class="form-floating">
								<select class="form-select form-select mb-3" id="selectEmpresas"
									aria-label=".form-select example">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresasFiltradas']->value, 'empresa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['empresa']->value["nome"];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
								<label for="selectEmpresas">Selecione a empresa</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-success" name="buscarEmpresasFiltradas"
								value="click">Buscar</button>
						</div>
						<!-- data-bs-target="#modalEditar" -->
					</form>
				</div>
			</div>
		</div>
		<!-- MODAL PARA EDITAR -->
		<div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Editar empresa</h5>
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
		<!-- MODAL PARA BUSCAR PARA REMOÇÃO -->
		<div class="modal fade" id="modalBuscarRemocao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Buscar empresa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form action="home.php" method="post`">
							<div class="form-floating">
								<select class="form-select form-select mb-3" id="floatingSelect"
									aria-label=".form-select example">
									<option selected>Selecione</option>
									<option value="cnpj">CNPJ</option>
									<option value="nome">Nome</option>
									<option value="email">Email</option>
									<option value="cep">CEP</option>
								</select>
								<label for="floatingSelect">Selecione como deseja pesquisar</label>
							</div>
							<div class="mb-3">
								<input type="text" class="form-control" id="busca">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-success" data-bs-toggle="modal"
							data-bs-target="#modalRemover">Buscar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL PARA REMOVER -->
		<div class="modal fade" id="modalRemover" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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



	<footer class="footer mt-auto bg-light fixed-bottom p-3">
		<p>
			&copy; Copyright by RB Team
		</p>
	</footer>
	</div>
	</div>

	
</body>

</html><?php }
}
