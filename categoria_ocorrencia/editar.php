<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM categoria_ocorrencia WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $descricao = $row[1];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administradora de Condominios Sol Nascente</title>
    </head>
    <body>
        <h2>Editar Categoria de Ocorrencias</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Descricao da Categoria*</label>
            <input type="text" name="descricao" id="descricao" required="true" value="<?php echo $descricao; ?>" maxlength="30"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
