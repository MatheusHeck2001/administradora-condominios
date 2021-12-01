<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Condomínio não encontrado para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['nome'] == "") {
            echo "Por favor, informe o nome do condomínio";
        } else if ($_POST['cnpj'] == "") {
            echo "Por favor, informe o CNPJ do condomínio";
        } else if ($_POST['endereco'] == ""){
            echo "Por favor, informe o endereço do condomínio";
        } else {
            $nome = $_POST['nome'];
            $cnpj = $_POST['cnpj'];
            $endereco = $_POST['endereco'];

            $sql = "UPDATE aluno SET nome = '$nome', email = '$email' WHERE id = $id;";

            if ($mysqli->query($sql) == true) {
                echo "Condomínio editado";
            } else {
                echo "Erro ao editar o condomínio, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>
