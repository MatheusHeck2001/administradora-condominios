<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT nome, cnpj, endereco FROM condominio WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $nome = $row[0];
            $cnpj = $row[1];
            $endereco = $row[2];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente Administradora de Condomínios</title>
    </head>
    <body>
        <h2>Editar Condomínios</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="50"/>
            <br/><br/>
            <label for="cnpj">CNPJ*</label>
            <input type="text" name="cnpj" id="cnpj" required="true" value="<?php echo $cnpj; ?>" maxlength="14"/>
            <br/><br/>
            <label for="endereco">Endereço*</label>
            <input type="text" name="endereco" id="endereco" required="true" value="<?php echo $email; ?>" maxlength="100"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
