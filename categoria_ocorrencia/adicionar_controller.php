<?php
    include ('../config.php');

    if($_POST['descricao'] == ""){
        echo "Por favor, informe a descricao da categoria de ocorrência: ";
    }    
    else {
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO categoria_ocorrencia (descricao) 
                VALUES ('$descricao');";

        if ($mysqli->query($sql) == true){
            echo "Categoria de ocorrência adicionado!";
        } else {
            echo "Erro ao adicionar a categoria de ocorrência, tente novamente...";
        }
        $mysqli->close();
    }
?>
<br><br>
<button type="button" onclick="location.href = 'adicionar.php'">Voltar</button>