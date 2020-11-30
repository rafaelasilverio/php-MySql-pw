<?php


// $tipo = $_POST["tipo"];
// $nome = $_POST["nome"];

// if($tipo == "png"){
//     $nome_final = $nome . ".png";
// }else if($tipo = "jpg"){
//     $nome_final = $nome . ".jpg";
// }
// if (substr($_FILES['arquivo']['name'], -3) == "jpg" || substr($_FILES['arquivo']['name'], -3) == "png") {
//             $dir = './arquivos/';
//             $tmpName = $_FILES['arquivo']['tmp_name'];
//             $name = $_FILES['arquivo']['name'];
//             // move_uploaded_file
//             if (move_uploaded_file($tmpName, $dir . $nome_final)) {
//                  $sqlstring = "insert into imagens (id, arquivo, nome) values (null, '$nome_final')";
//                 mysqli_query($conexao, $sqlstring);
//                 header('Location: index.php');
//             } else {
//                 echo "Erro ao gravar o arquivo";
//             }
//         } else {
//             echo "Não é documento jpg";
//         }
//     }
include_once('conexao.php');
$tipo = $_POST["tipo"];
//receber a variavel de nome lá do index
if($tipo == "1"){

    $nome = $_POST["nome"];
    $nome_final = $nome . ".png";

  if (substr($_FILES['arquivo']['name'], -3) == "png") {
      $dir = './arquivos/';
      $tmpName = $_FILES['arquivo']['tmp_name'];
      $name = $_FILES['arquivo']['name'];
      // move_uploaded_file
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo, nome) values (null, '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } 
  }
}
  
if($tipo == "2"){
 
    $nome = $_POST["nome"];
    $nome_final = $nome . ".jpg";

    if (substr($_FILES['arquivo']['name'], -3) == "jpg") {
        $dir = './arquivos/';
        $tmpName = $_FILES['arquivo']['tmp_name'];
        $name = $_FILES['arquivo']['name'];
        // move_uploaded_file
        if (move_uploaded_file($tmpName, $dir . $nome_final)) {
             $sqlstring = "insert into imagens (id, arquivo, nome) values (null, '$nome_final')";
            mysqli_query($conexao, $sqlstring);
            header('Location: index.php');
        } else {
            echo "Erro ao gravar o arquivo";
        }
    } else {
        echo "Não é documento jpg";
    }
}



?>


