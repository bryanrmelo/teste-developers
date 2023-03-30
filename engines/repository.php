<?php


class Repository
{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_password = 'root';
    private $db_db = 'astron';
    public $conexao;

    public function __construct()
    {
        $this->conexao = new mysqli(
            $this->db_host,
            $this->db_user,
            $this->db_password,
            $this->db_db
        );
        if (mysqli_connect_error()) {
            trigger_error("Falha de conexão: " . mysqli_connect_error());
        } else {
            return $this->conexao;
        }
    }
    public function buscarEmpresas()
    {
        $query = "SELECT * FROM empresa";
        $result = $this->conexao->query($query);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function buscarEmpresa($id)
    {
        $query = "SELECT * FROM empresa WHERE id = '$id'";
        $result = $this->conexao->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Busca falhou!";
        }
    }

    public function adicionarEmpresa($post)
    {
        $nome = $this->conexao->real_escape_string($_POST['nome']);
        $cnpj = $this->conexao->real_escape_string($_POST['cnpj']);
        $email = $this->conexao->real_escape_string($_POST['email']);
        $cep = $this->conexao->real_escape_string($_POST['cep']);
        $tamanho = $this->conexao->real_escape_string($_POST['tamanho']);
        $ativo = $this->conexao->real_escape_string($_POST['ativo']);
        if ($ativo != "Ativo") {
            $ativo = "Inativo";
        }
        $query = "INSERT INTO empresa (nome, cnpj, email, cep, tamanho, ativo) VALUES ('$nome','$cnpj','$email','$cep','$tamanho','$ativo')";

        $sql = $this->conexao->query($query);
        if ($sql == true) {
            header("Location:home?msg1=adicionar");
        } else {
            echo "Adição falhou!";
        }
    }

    public function atualizar($postData)
    {
        $nome = $this->conexao->real_escape_string($_POST['nome']);
        $cnpj = $this->conexao->real_escape_string($_POST['cnpj']);
        $email = $this->conexao->real_escape_string($_POST['email']);
        $cep = $this->conexao->real_escape_string($_POST['cep']);
        $tamanho = $this->conexao->real_escape_string($_POST['tamanho']);
        $ativo = $this->conexao->real_escape_string($_POST['ativo']);
        $id = $this->conexao->real_escape_string($_POST['id']);
        if ($ativo != "Ativo") {
            $ativo = "Inativo";
        }
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE empresa SET nome = '$nome', cnpj = '$cnpj', email = '$email', cep = '$cep', tamanho = '$tamanho', ativo = '$ativo' WHERE id = '$id'";
            $sql = $this->conexao->query($query);
            if ($sql == true) {
                header("Location:home?msg2=atualizar");
            } else {
                echo "Atualização falhou!";
            }
        }
    }

    public function removerEmpresa($id)
    {
        $query = "DELETE FROM empresa WHERE id = '$id'";
        $sql = $this->conexao->query($query);
        if ($sql == true) {
            header("Location:home?msg3=remover");
        } else {
            echo "Deleção falhou!";
        }
    }
}
