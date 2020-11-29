<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP - UPLOAD de Arquivos </title>
    </head>
    <body>
        <h1> Exemplo de Upload - PHP </h1>
        <div>
             <form action="upload.php" method="get">
             <label for="arquivo">Insira o nome do arquivo:<input type = "text" name = "nome"/><br></label>
             <input type="submit" value="Enviar" />
             </form>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
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