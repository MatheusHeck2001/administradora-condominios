<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Condomínio não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM condominio WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Condomínio excluído";
        } else {
            echo "Erro ao excluir o condomínio, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>
