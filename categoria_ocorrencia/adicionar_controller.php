<?php
    include ('../config.php');

    if($_POST['descricao'] == ""){
        echo "Por favor, informe a descricao da categoria de ocorrĂȘncia: ";
    }    
    else {
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO categoria_ocorrencia (descricao) 
                VALUES ('$descricao');";

        if ($mysqli->query($sql) == true){
            echo "Categoria de ocorrĂȘncia adicionado!";
        } else {
            echo "Erro ao adicionar a categoria de ocorrĂȘncia, tente novamente...";
        }
        $mysqli->close();
    }
?>
<br><br>
<button type="button" onclick="location.href = 'adicionar.php'">Voltar</button>