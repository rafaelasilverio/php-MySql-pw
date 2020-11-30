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
        include_once('conexao.php');
        $sqlstring = 'select * from imagens order by ASC';
        $resultado = mysqli_query($conexao, $sqlstring);
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "<img src='arquivos/" . $dados['arquivo'] . "' width='100px' heigth='100px'>";
            echo "<a href='apagar.php?id=" . $dados['id'] . "'><img src='delete.png'></a>";
            echo "<a href='abrir.php?id=" . $dados['id'] . "'><img src='abrir.png'></a>";
        }
        ?>
    </body>
</html>