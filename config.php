<?php
    // Fazer a conexão com o BD --> ip do servidor, nome do usuário, senha do usuário, nome do BD
    $mysqli = new mysqli('localhost', 'root', 'matheussheck', 'administradora_condominios');

    if (mysqli_connect_error()) {
        echo "Erro ao conectar com o BD: " . mysqli_connect_error();
        exit();
    }
