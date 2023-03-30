<?php

/*
 * este é um script php que será incluído
 * este script especificamente será incluído na página principal (home)
 * crie scripts com o nome da página: minhapagina.php
 * que automaticamente será incluído na página determinada
 * 
 * há a possibilidade de criar um script global, qeu é incluído em todas as páginas: global .php
 * 
 */

$smarty = new Smarty();

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'astron';
$db_port = 8889;

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}

$_TEMPLATE["limite"] = 20;
$_TEMPLATE["empresas"] = buscarEmpresasComPaginacao();
$_TEMPLATE["totalPaginas"] = calcularTotalPaginas();
$_TEMPLATE["empresasFiltradas"] = [];

if (isset($_POST['buscarEmpresasFiltradas'])) {
    $metodoBusca = $_POST["metodoBusca"];
    $busca = $_POST["busca"];

    $_TEMPLATE["empresasFiltradas"] = buscarComFiltro($metodoBusca, $busca);
}


if (isset($_POST['adicionar'])) {
    adicionarEmpresa();
}

function buscarEmpresas()
{
    global $mysqli;

    $sql = "SELECT * FROM empresa";
    $result = $mysqli->query($sql);
    $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $array;
}

function buscarEmpresasComPaginacao()
{
    global $mysqli;

    $numeroPaginacao = 20;

    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 1;
    }

    $comecoPaginacao = ($pagina * 20) - 20;

    $stmt = $mysqli->prepare("SELECT * FROM Empresa ORDER BY ID ASC LIMIT ?,?");

    $stmt->bind_param("ii", $comecoPaginacao, $numeroPaginacao);
    $stmt->execute();
    $result = $stmt->get_result();

    $array = [];
    while ($row = $result->fetch_assoc()) {
        if ($row["tamanho"] == 0) {
            $row["tamanho"] = "Pequeno Porte";
        }
        if ($row["tamanho"] == 1) {
            $row["tamanho"] = "Médio Porte";
        }
        if ($row["tamanho"] == 2) {
            $row["tamanho"] = "Grande Porte";
        }
        if ($row["ativo"] == 0) {
            $row["ativo"] = "Inativo";
        }
        if ($row["ativo"] == 1) {
            $row["ativo"] = "Ativo";
        }
        array_push($array, $row);
    }

    return $array;
}

function calcularTotalPaginas()
{
    global $mysqli;

    $result = $mysqli->query("SELECT * FROM empresa");
    $total = $result->num_rows;

    return ceil($total / 20);
}

function adicionarEmpresa()
{

    global $mysqli;

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $tamanho = $_POST['tamanho'];
    if (isset($_POST['ativo'])) {
        $ativo = $_POST['ativo'];
    } else {
        $ativo = 0;
    }

    $stmt = $mysqli->prepare("INSERT INTO empresa (nome, cnpj, email, cep, tamanho, ativo) VALUES (?,?,?,?,?,?)");

    $stmt->bind_param("ssssss", $nome, $cnpj, $email, $cep, $tamanho, $ativo);
    $stmt->execute();
}

function buscarComFiltro($metodoBusca, $busca)
{

    global $mysqli;

    $stmt = $mysqli->prepare("SELECT * FROM Empresa WHERE ? = ? ORDER BY ID ASC");

    $stmt->bind_param("si", $metodoBusca, $busca);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result;
}


$mysqli->close();
