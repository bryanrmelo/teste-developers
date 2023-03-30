<?php

include 'repository.php';

$repositorio = new Repository();

$_TEMPLATE['opcoes'] = array('Pequeno Porte', 'Médio Porte', 'Grande Porte');

if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $_TEMPLATE['empresa'] = $repositorio->buscarEmpresa($editId);
}

if (isset($_POST['atualizar'])) {
    $repositorio->atualizar($_POST);
}
