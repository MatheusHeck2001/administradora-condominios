<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente Administradora de Condomínios</title>
    </head>
    <body>
        <h2>Adicionar Categoria de Ocorrências</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Descricao*</label>
            <input type="text" name="descricao" id="descricao" required="true" maxlength="30"/>
            <br/><br/>

            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
