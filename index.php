<!DOCTYPE html>
<?php include ('config.php'); ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial"charset=utf-8>
        <title>Sol Nascente Administradora de Condomínios</title>
    </head>
    <body>
        <h1>SOL NASCENTE ADMINISTRADORA DE CONDOMÍNIOS</h1>
        <hr/>
        <h2>Gerenciar Categorias de Ocorrências</h2>
        <button onclick="location.href='categoria_ocorrencia/adicionar.php'">Adicionar</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Categoria</th>
                <th>Opções</th>
            </tr>
            <?php
                $sql = "SELECT * FROM categoria_ocorrencia ORDER BY id;";
                if($result = $mysqli->query($sql)) {
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row['descricao'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='categoria_ocorrencia/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='categoria_ocorrencia/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br>
        <hr>
        <h2>Gerenciar Condominios</h2>
        <button onclick="location.href='condominio/adicionar.php'">Adicionar</button>
        <br><br>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Endereço</th>
            </tr>
            <?php
                $sql = "SELECT id, nome, cnpj, endereco FROM condominio ORDER BY id;";
                if ($result = $mysqli->query($sql)){
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['cnpj'] . "</td>";
                        echo "<td>" . $row['endereco'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='condominio/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='condominio/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
                ?>
        </table>
        <br>
        <hr>
    </body>