<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || PONTO Eletrônico</title>
</head>
<body>
    <?php
    require_once 'conexao.php';

    session_start();
    
    echo "<p>$_SESSION[nome] | $_SESSION[email]</p>";

        // fazer tramite de pegar data, hora, separar dia e mês
        // fazer botão para puxar com (get) e guardar no banco 
        // estilizar
        // listar todos que estão no banco
        // gerar pdf ou excel com os dados de ponto marcados
        // validações de segurança
        // mudar pra pdo

    
    ?>
</body>
</html>