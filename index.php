<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP - UPLOAD de Arquivos </title>
    </head>
    <body>
        <h1> Exemplo de Upload - PHP </h1>
        <div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="arquivo">Insira o nome do arquivo:<input type = "text" name = "nome"/><br></label>
                <label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
                <br>
                <label> </label>
                <label>PNG<input type="radio" name ="tipo" value = "png"></label>
                <label> </label>
                <label>JPG<input type="radio" name ="tipo" value = "jpg"></label>
                <br />
                <br />
                <input type="submit" value="Enviar" />
            </form>
        </div>
        <hr>
        <?php
        ini_set('display_errors',1); 
        ini_set('display_startup_erros',1); 
        error_reporting(E_ALL);
        include_once('conexao.php');
        $sqlstring = 'select * from imagens order by nome asc';
        $resultado = mysqli_query($conexao, $sqlstring);
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "</td><td width='200px'>";
            echo "<td align='center'>" . $dados['nome'] . "</td>";
            echo "<td align='center'><img src='arquivos/" . $dados['arquivo'] . "' width='100px' heigth='100px'></td>";
            echo "<td align='center'><a href='apagar.php?id=" . $dados['id'] . "'><img src='delete.png'></a></td>";
            echo "<td align='center'><a href='abrir.php?id=" . $dados['id'] . "'><img src='abrir.png'></a></td>";
            echo "</td></tr></table>";
        }
        ?>
    </body>
</html>