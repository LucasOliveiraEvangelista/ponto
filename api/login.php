<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    <?php
 
    require_once 'conexao.php';

    session_start();

    if(empty($_POST['emailL']) || empty($_POST['senhaL'])) {
        header('Location: index.php');
        exit();
    }
    
        $email = $_POST["emailL"];
        $senha = sha1($_POST['senhaL']);

        $query = "SELECT nome, email, senha FROM users WHERE email = '$email' AND senha = '$senha'";
        $check = mysqli_query($conn, $query);
        $achou = mysqli_num_rows($check);

        if ($achou == 1){
            $dados = mysqli_fetch_array($check);

            $_SESSION["nome"] = $dados["nome"];
            $_SESSION["email"] = $dados["email"];
            $_SESSION["senha"] = $dados["senha"];
            
            header("Location:home.php");
            exit();

        }else{
            echo "Dados ínvalidos";
            header("Location: index.php");
            exit();
        }
    
    ?>

</body>
</html>