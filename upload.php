<?php

include_once('conexao.php');

//receber a variavel de nome lá do index
$x = $_POST[""];
$nome_final = ".png";

if (substr($_FILES['arquivo']['name'], -3) == "png" || substr($_FILES['arquivo']['name'], -3) == "jpg" ) {
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['name'];
    // move_uploaded_file
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo) values (null, '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao gravar o arquivo";
    }
} else {
    echo "Não é documento png ou jpg";
}
?>


