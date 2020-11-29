<?php

include_once('conexao.php');


$nome_final = ".png";

if (substr($_FILES['arquivo']['name'], -3) == "png") {
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
    echo "Não é documento png";
}
?>


