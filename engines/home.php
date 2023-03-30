<?php
include 'repository.php';

$repositorio = new Repository();

$_TEMPLATE["empresas"] = $repositorio->buscarEmpresas();

if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $repositorio->removerEmpresa($deleteId);
}

if (isset($_POST['btnAdicionar'])) {
    $repositorio->adicionarEmpresa($_POST);
}

if (isset($_GET['msg1']) == "adicionar") {
    echo "<div class='alert alert-success alert-dismissible'>
            Adição realizada com sucesso.
          </div>";
}
if (isset($_GET['msg2']) == "atualizar") {
    echo "<div class='alert alert-success alert-dismissible'>
            Alteração realizada com sucesso.
          </div>";
}
if (isset($_GET['msg3']) == "remover") {
    echo "<div class='alert alert-success alert-dismissible'>
            Remoção realizada com sucesso.
          </div>";
}
