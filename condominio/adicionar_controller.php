<?php
    include ('../config.php');

    if($_POST['nome'] == ""){
        echo "Por favor, informe o nome do condomínio: ";
    } else if ($_POST['cnpj'] == "") {
        echo "Por favor, informe o CNPJ do condomínio: ";
    } else if ($_POST['endereco'] == ""){
        echo "Por favor informe o endereço do condomínio: ";
    } else {
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $endereco = $_POST['endereco'];

        $sql = "INSERT INTO condominio (nome, cnpj, endereco) VALUES ('$nome', '$cnpj', '$endereco');";

        if ($mysqli->query($sql) == true){
            echo "Condomínio adicionado!";
        } else {
            echo "Erro ao adicionar o condomínio, tente novamente...";
        }
        $mysqli->close();
    }
?>
<br><br>
<button type="button" onclick="location.href = 'adicionar.php'">Voltar</button>