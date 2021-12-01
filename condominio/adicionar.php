<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente Administradora de Condomínios</title>
    </head>
    <body>
        <h2>Adicionar Condomínios</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" maxlength="50"/>
            <br/><br/>
            <label for="cnpj">CNPJ*</label>
            <input type="text" name="cnpj" id="cnpj" required="true" maxlength="14"/>
            <br/><br/>
            <label for="senha">Endereço*</label>
            <input type="text" name="endereco" id="endereco" required="true" maxlength="100"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
