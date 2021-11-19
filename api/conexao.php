<?php  
    $conn = mysqli_connect("localhost","root","vertrigo","ponto") or die ("Erro ao conectar");
    if (!mysqli_set_charset($conn, 'utf8')) {
        printf('Error ao usar utf8: %s', mysqli_error($conn));
        exit;
    }
?>