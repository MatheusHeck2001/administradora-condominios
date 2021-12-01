<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Categoria não encontrada para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['descricao'] == "") {
            echo "Por favor, informe a nova descricao da categoria de ocorrência";
        } else {
            $descricao = $_POST['descricao'];

            $sql = "UPDATE categoria_ocorrencia SET descricao = '$descricao' WHERE id = $id;";

            if ($mysqli->query($sql) == true) {
                echo "Categoria de ocorrência editada";
            } else {
                echo "Erro ao editar a descrição da categoria de ocorrência, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>
