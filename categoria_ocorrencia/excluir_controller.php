<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Categoria não encontrada para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM categoria_ocorrencia WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Categoria excluído";
        } else {
            echo "Erro ao excluir a categoria, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>
